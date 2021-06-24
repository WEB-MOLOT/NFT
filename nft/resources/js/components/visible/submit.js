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

    let data = new FormData,
        $bar = $('.message-bar');

    $bar.css('display', 'none');
    $form.find('[type="submit]').prop('disabled', true);

    $form.find('input[type="text"], textarea, input[type="radio"]:checked, input[type="hidden"]').each((k, i) => {
        data.append(i.name, i.value);
    });

    $form.find('.filter__category-items > .active').each((k, i) => {
        data.append('categories[]', i.dataset.id);
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
            $bar.css('display', 'flex').find('.unsubscribed__caption').text(response.message);
        },
        error: response => {
            let json = response.responseJSON || {};

            $bar.css('display', 'flex').find('.unsubscribed__caption').text(response.responseJSON.message);

            if(typeof json.errors !== 'undefined') {
                json.errors.each((k, i) => {
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
