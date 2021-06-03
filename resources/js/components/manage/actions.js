import {errorHandlerWithForm, initializeSelect, successHandler} from "./helpers";
import tinymce from "tinymce";

const moduleName = 'actions';

export function actions() {
    $(document)
        .on('click', '[data-action]', onClickActionButtonEvent)
        .on('submit', '[data-action-form]', onSubmitAnyFormEvent)
        .on('change, keyup', '.is-invalid', onChangeErrorInputValueEvent);

    bootActionForms();
}

function bootActionForms() {
    let $form = $('[data-action-form]');

    if(!$form.length) {
        return false;
    }

    initializeSelect($form);
}

function onClickActionButtonEvent(e) {
    e.preventDefault();

    let selector = '[data-action-form="' + e.currentTarget.dataset.action + '"]',
        $section = $(selector);

    if(e.currentTarget.dataset.action === 'destroy') {
        $section.attr('action', e.currentTarget.href);
    }

    $section.trigger('submit', [e.currentTarget]);
}

function onSubmitAnyFormEvent(e, button) {
    e.preventDefault();

    let $this = $(e.currentTarget),
        $button = button ? $(button) : $this.find('[type=submit]'),
        data = new FormData;

    if($this.data('action-form') === 'destroy' && !confirm('Are you sure you want to delete the item? This action cannot be canceled.')) {
        return false;
    }

    $button.prop('disabled', true);
    tinymce.triggerSave();

    $this.serializeArray().forEach((i) => data.append(i.name, i.value));
    $this.find('input[type=file]').each((k, i) => {
        let name = i.getAttribute('name');

        for(let l = 0; l < i.files.length; l++) {
            data.append(name, i.files[l]);
        }
    });

    $.ajax({
        type: $this.attr('method'),
        url: $this.attr('action'),
        data: data,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: response => {
            $button.prop('disabled', false);
            successHandler(response);
            $this.trigger('successResponse', [$this, response])
        },
        error: response => {
            $button.prop('disabled', false);
            errorHandlerWithForm($this, response);
            $this.trigger('errorResponse', [$this, response]);
        }
    });
}

function onChangeErrorInputValueEvent(e) {
    let $this = $(e.currentTarget);

    $this.removeClass('is-invalid');
    $this.parent().find('> .invalid-feedback').remove();
}
