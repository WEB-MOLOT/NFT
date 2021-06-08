import {submit} from "./components/visible/submit";
import {form} from "./components/visible/form";

window.$ = window.jQuery = require('jquery');

require('slick-slider');
require('@fancyapps/fancybox');
window.wNumb = require('wnumb');
window.noUiSlider = require('nouislider');
window.inView = require('in-view');
require('dragscroll');

require('../visible/js/calendar');
require('../visible/js/filter');
require('../visible/js/form');
require('../visible/js/header');
require('../visible/js/inviev');
require('../visible/js/menu');
require('../visible/js/modal');
require('../visible/js/personal-area');
require('../visible/js/prices');
require('../visible/js/project');
require('../visible/js/promo');
require('../visible/js/select');
require('../visible/js/timer');
require('../visible/js/unsubscribed');
require('../visible/js/work-card');

window.app = {
    current_url: location.href,
    recaptcha_key: '6Lc2WxwbAAAAADIR95hjCOZt4cUsH14Q27rqAsyu',
    components: [
        submit, form
    ]
};

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(() => {
    app.components.forEach(i => i());
});
