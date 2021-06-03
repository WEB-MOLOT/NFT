import Swal from "sweetalert2";

const moduleName = 'helpers';

export function successHandler(response) {
    if(typeof response.message === 'string') {
        Swal.fire({
            title: response.message,
            icon: 'success'
        }).then();
    }

    if(typeof response.redirect !== 'undefined') {
        setTimeout(() => location.href = response.redirect.route, response.redirect.delay);
    }
}

export function errorHandler(response) {
    /*if(typeof response.responseJSON.errors !== 'object') {
        noty(response.responseJSON.message, 'error').show();
    }
    else {
        $.each(response.responseJSON.errors, (k, i) => noty(i, 'error').show());
    }*/
}

export function errorHandlerWithForm($form, response) {
    let undefinedErrors = [];

    $.each(response.responseJSON.errors, (k, i) => {
        let $input = $form.find('[name="' + dotToArray(k) + '"]:not(:hidden)');

        if($input.length) {
            !$input.parent().find('> .invalid-feedback').length && $('<div />', {class: 'invalid-feedback'}).appendTo($input.parent());

            $input.addClass('is-invalid');
            $input.parent().find('> .invalid-feedback').text(i);
        }
        else {
            undefinedErrors.push(i);
        }
    });

    Swal.fire({
        title: response.responseJSON.message,
        html: undefinedErrors.length ? undefinedErrors.join('<br />') : '',
        icon: 'error'
    }).then();
}

export function errorMessage(message) {
    Swal.fire({
        title: message,
        icon: 'error'
    }).then();
}

export function delay(callback, ms) {
    let timer = 0;

    return () => {
        let context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(() => {
            callback.apply(context, args);
        }, ms || 0);
    };
}

export function dotToArray(str) {
    let output = '',
        chucks = str.split('.');

    if(chucks.length > 1) {
        for(let i = 0; i < chucks.length; i++) {
            if(i === 0) {
                output = chucks[i];
            }
            else {
                output += '[' + chucks[i] + ']';
            }
        }
    }
    else {
        output = chucks[0];
    }

    return output;
}

export function initializeSelect($section) {
    let options = {};

    if($section.is('.modal')) {
        options.dropdownParent = $section
    }

    $section.find('select:not([data-not-select2])').select2(options);
}
