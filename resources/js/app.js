/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import HomeContent from './components/HomeContent';

// Vue.component('home-content', HomeContent)s


const app = new Vue({
    el: '#app',
    components: {
        'home-content': HomeContent
    }
});
