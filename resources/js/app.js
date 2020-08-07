/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import AboutSection from './home-components/AboutSection';
import ServiceSection from './home-components/ServiceSection';
import PackageSection from './home-components/PackageSection';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('about-section', AboutSection);
Vue.component('service-section', ServiceSection);
Vue.component('package-section', PackageSection);



const app = new Vue({
    el: '#app',
});
