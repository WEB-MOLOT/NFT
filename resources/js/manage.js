import bsCustomFileInput from 'bs-custom-file-input';
import OverlayScrollbars from "overlayscrollbars";
import {dataTable} from "./components/manage/dataTable";
import {actions} from "./components/manage/actions";

window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.htmlEncode = require('js-htmlencode').htmlEncode;

    require('bootstrap');
    require('select2');
    require('admin-lte');

    window.dt = require('datatables.net-bs4')();
    //window.buttons = require('datatables.net-buttons-bs4')();
    require('datatables.net-responsive-bs4')(window, $);
} catch (e) {}

$.fn.select2.defaults.set('theme', 'bootstrap4');
$.fn.select2.defaults.set('language', require('select2/src/js/select2/i18n/ru'));

window.app = {
    boot: [],
    dataTable: {
        columns: typeof window.dataTableRenders === 'undefined' ? {} : window.dataTableRenders
    }
};

app.boot.push(actions);
app.boot.push(dataTable);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

bsCustomFileInput.init();

OverlayScrollbars(document.querySelector('.sidebar'), {
    className: 'os-theme-light',
    sizeAutoCapable: true
});

app.boot.forEach((i) => i());
