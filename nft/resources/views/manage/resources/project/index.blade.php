@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table @dataTable('resources.projects.data', $columns) class="table table-bordered table-hover"></table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@push('footer')
    <script type="text/javascript">
        window.dataTableRenders = {
            name: {
                title: 'Name'
            },
            status: {
                title: 'Status',
                render: (data, type, row) => {
                    switch(row.status) {
                        case 2:
                            return 'Active';
                        case 3:
                            return 'Upcoming';
                    }
                },
                sortable: false
            },
            rating: {
                title: 'Rating',
                render: (data, type, row) => row.rating === null ? '-' : row.rating
            },
            price: {
                title: 'Price',
                render: (data, type, row) => {
                    let min = row.min_price !== null ? row.min_price : '-',
                        max = row.max_price !== null ? row.max_price : '-';

                    return `${min} - ${max} ${row.currency_name}`;
                },
                sortable: false
            },
            user_id: {
                title: 'User',
                render: (data, type, row) => row.user ? `<a href="${row.user.actions.edit}">${htmlEncode(row.user.name)}</a>` : '-',
                sortable: false
            },
            created_at: {
                title: 'Created at',
                render: (data, type, row) => row.formatted_created_at
            },
            updated_at: {
                title: 'Updated at',
                render: (data, type, row) => row.formatted_updated_at
            }
        };
    </script>
@endpush
