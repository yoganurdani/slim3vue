/* ===============================
 * This is the main JavaScript file, it hosts all of our imports and also the main Vue instance.
 * =============================== */

// imports
import Vue from "vue";
import VueRouter from 'vue-router';
import Helpers from "./imports/helpers";
import store from './vuex/store';
import router from './routes.js';
import axios from 'axios';
//import allComponents from "./allComponents";

Vue.use(VueRouter);

// set the helpers class as a window method that everything can access
window.helpers = new Helpers;

// component
Vue.component('containerpost',require('./components/Container-post.vue'));
Vue.component('cardpost',require('./components/Card-post.vue'));
Vue.component('cleanfooter',require('./components/Clean-footer.vue'));

// main vue instance
new Vue({
    el: '#app',
    store,
    router
});
