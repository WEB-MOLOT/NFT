const moduleName = 'submit';

let $form;

export function submit() {
    $form = $('[data-submit-form]');

    if(!$form.length) {
        return false;
    }

    $form
        .on('submit', onSubmitFormEvent)
        .on('change', onChangeAnyInputEvent);
}

function onSubmitFormEvent(e) {
    e.preventDefault();

    let data = new FormData;

    $form.find('input[type="text"], textarea').each((k, i) => {
        data.append(i.name, i.value);
    });

    $form.find('.filter__category-items > .active').forEach((k, i) => {
        data.append('categories', i.dataset.id);
    });

    $form.find('input[type="file"]').each((k, i) => {
        for(let l = 0; l < i.files.length; l++) {
            data.append(i.name, i.files[l]);
        }
    });

    $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: data,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: response => {

        },
        error: response => {
            let json = response.responseJSON || {};

            if(typeof json.errors !== 'undefined') {
                json.errors.forEach((i, k) => {
                    let $input = $form.find(`[name="${k}"]`);

                    if($input.length) {
                        switch(true) {
                            case $input.is('[type="file"]'):
                                $input.parent().parent().addClass('error');
                                break;
                            default:
                                $input.addClass('error');
                        }
                    }
                });
            }
        }
    });
}

function onChangeAnyInputEvent(e) {
    let $this = $(e.currentTarget);

    switch(true) {
        case $this.is('[type="file"]'):
            $this.parent().parent().removeClass('error');
            break;
        default:
            $this.removeClass('error');
    }
}
