import Vue from "vue";

require('./bootstrap');

$(document).ready(function () {
   $('select').selectpicker();
});

window.Vue = require('vue').default;

Vue.component('register-form-component', require('./components/RegisterFormComponent.vue').default);

const app = new Vue({
    el: '#app',
});
