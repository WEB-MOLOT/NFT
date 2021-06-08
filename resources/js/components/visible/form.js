const moduleName = 'form';

export function form() {
    $(document).on('submit', 'form[data-form]', onSubmitAnyFormEvent);
}

function onSubmitAnyFormEvent(e) {
    e.preventDefault();

    let $this = $(e.currentTarget);

    grecaptcha.ready(() => {
        grecaptcha.execute(window.app.recaptcha_key, {action: 'submit'})
            .then((token) => {
                let data = {};

                $this.serializeArray().forEach(i => {
                    data[i.name] = i.value;
                });

                data.recaptcha_token = token;

                //$this.find('[type="submit]').prop('disabled', true);

                $.ajax({
                    type: $this.attr('method'),
                    url: $this.attr('action'),
                    data: data,
                    dataType: 'json',
                    success: response => {
                        grecaptcha.reset(window.app.recaptcha_key);
                    },
                    error: response => {
                        grecaptcha.reset(window.app.recaptcha_key);
                    }
                });
            })
            .catch((q) => {
                console.log(q);
            });
    });
}

