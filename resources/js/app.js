require('./bootstrap');

import Vue from 'vue';
import router from "./router";
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import axios from 'axios';
import VueAxios from 'vue-axios';


// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueAxios, Vue);
 
Vue.component('v-header', require('./components/Header.vue').default);

 
 const app = new Vue({
     el: '#app',
     router,
     axios,
 });
 