import {delay, errorHandler, initializeSelect} from "./helpers";

const moduleName = 'dataTables';

let $table, $filter, columns;

export function dataTable() {
    $table = $('[data-datatable]');

    if(!$table.length) {
        return false;
    }

    app.dataTable.columns.actions = {
        render: (data, type, row) => {
            let actions = [];

            $.each(row.actions, (ak, av) => {
                let route = av,
                    action, icon, title, color, event;

                switch(ak) {
                    case 'show':
                        title = 'Show';
                        icon = '<i class="fas fa-eye"></i>';
                        color = 'primary';
                        break;
                    case 'edit':
                        title = 'Edit';
                        icon = '<i class="fas fa-edit"></i>';
                        color = 'info';
                        break;
                    case 'destroy':
                        title = 'Destroy';
                        icon = '<i class="fas fa-trash"></i>';
                        color = 'danger';
                        event = 'destroy'
                        break;
                    default:
                        title = av.title;
                        icon = '<i class="' + av.icon + '"></i>';
                        color = av.color;
                        route = av.route;
                }

                action = $('<a />', {
                    class: 'btn btn-sm btn-' + color,
                    href: route,
                    title: title
                }).html(icon);

                if(typeof event === 'string') {
                    action.attr('data-action', event);
                }

                actions.push(action.prop('outerHTML'));
            });

            return actions.join(' ');
        },
        orderable: false,
        searchable: false,
        title: 'Actions',
        //width: '12%'
    };

    $filter = $('[data-data-filter]');
    columns = $table.data('columns') || {};

    initializeSelect($filter);

    $.each(columns, (k, i) => {
        if(typeof app.dataTable.columns[i.data] !== undefined) {
            columns[k].name = i.data;

            $.each(app.dataTable.columns[i.data], (ck, ci) => {
                columns[k][ck] = ci;
            });

            if(typeof columns[k].render === 'undefined') {
                columns[k].render = (data, type, row) => htmlEncode(typeof row[i.data] === 'string' ? row[i.data] : String(row[i.data]));
            }
        }
    });

    $table.dataTable({
        responsive: true,
        searching: false,
        processing: true,
        serverSide: true,
        serverMethod: 'post',
        ajax: {
            url: $table.data('datatable'),
            data: (data) => {
                data.filter = {};

                $filter.serializeArray().forEach((i) => {
                    if(i.name.endsWith('[]')) {
                        let name = i.name.substr(0, i.name.length - 2);

                        if(typeof data.filter[name] === 'undefined') {
                            data.filter[name] = [];
                        }

                        data.filter[name].push(i.value);
                    }
                    else {
                        data.filter[i.name] = i.value;
                    }
                });
            },
            error: errorHandler
        },
        columns: columns,
        order: typeof $table.data('order-by') === 'object' ? $table.data('order-by') : [[0, 'asc']],
        //fnDrawCallback: (config) => $table.trigger('table_updated', [config.json, config])
        pageLength: 25
    });

    $filter
        .on('change', 'select', reloadTable)
        .on('keyup', 'input', delay(reloadTable, 350));

    global.$dataTable = $table;
}

export function reloadTable() {
    $table.DataTable().ajax.reload();

    let url = window.location.href.split('?')[0],
        query = [];

    $filter.serializeArray().forEach((i) => {
        if(i.value.length) {
            query.push(i);
        }
    });

    if(query.length) {
        url += '?' + $.param(query);
    }

    window.history.pushState('page', $('title').text(), url);
}
