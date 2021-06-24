const moduleName = 'form';

export function form() {
    $(document).on('submit', 'form[data-form]', onSubmitAnyFormEvent);
}

function onSubmitAnyFormEvent(e) {
    e.preventDefault();

    grecaptcha.execute(window.app.recaptcha_key, {action: 'submit'})
        .then((token) => {
            let $this = $(e.currentTarget),
                $bar = $('.message-bar'),
                data = {};

            $this.serializeArray().forEach(i => {
                data[i.name] = i.value;
            });

            data.recaptcha_token = token;

            $bar.css('display', 'none');
            $this.find('[type="submit]').prop('disabled', true);

            $.ajax({
                type: $this.attr('method'),
                url: $this.attr('action'),
                data: data,
                dataType: 'json',
                success: response => {
                    $bar.css('display', 'flex').find('.unsubscribed__caption').text(response.message);
                    grecaptcha.reset(window.app.recaptcha_key);
                },
                error: response => {
                    console.log(response);
                    $bar.css('display', 'flex').find('.unsubscribed__caption').text(response.responseJSON.message);
                    grecaptcha.reset(window.app.recaptcha_key);
                }
            });
        })
        .catch(() => {
            grecaptcha.reset(window.app.recaptcha_key);
        });
}

