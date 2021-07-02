import VueSweetalert2 from 'vue-sweetalert2';
window.Vue = require('vue').default;
window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')[
        'content'
        ],
    Accept: 'application/json'
};

// window.$ = window.jQuery = require('jquery');
// require('admin-lte');

// If you don't need the styles, do not connect
// import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);

Vue.component('add-project', require('./components/AddProject').default);
Vue.component('login', require('./components/auth/Login').default);
Vue.component('register', require('./components/auth/Register').default);
Vue.component('forgot', require('./components/auth/Forgot').default);

Vue.component('projects', require('./components/Projects').default);

const app = new Vue({
    el: '#app',
});
