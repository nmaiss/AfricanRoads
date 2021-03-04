/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('transport-form-component', require('./components/TransportFormComponent.vue').default);
Vue.component('table-component', require('./components/TableComponent.vue').default);
Vue.component('form-controller', require('./components/FormControllerComponent.vue').default);
Vue.component('send-form-component', require('./components/SendFormController.vue').default);
Vue.component('travel-form-component', require('./components/TravelFormComponent.vue').default);
Vue.component('contact', require('./components/ContactComponent.vue').default);
Vue.component('welcome', require('./components/WelcomeComponent.vue').default);
Vue.use(BootstrapVue)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
