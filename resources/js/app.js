/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 import {createApp} from 'vue'
 import { createStore } from 'vuex'
 import { VueMaskDirective } from 'v-mask';
  


 require('./bootstrap')
 import App from './App.vue'
 import axios from 'axios'
 import router from './router'
 
 import 'bootstrap';

const store = createStore({
  state () {
    return {
       
      user:"Paul",
      count : 0 
    }
  },
  mutations: {
    increment (state) {
      state.count++; 
    }
  }
   
});

//include v-mask
const vMaskV2 = VueMaskDirective;
const vMaskV3 = {
  beforeMount: vMaskV2.bind,
  updated: vMaskV2.componentUpdated,
  unmounted: vMaskV2.unbind
};


 const app = createApp(App)
 app.config.globalProperties.$axios = axios;
 
 app.use(router)
 app.use(store);
 app.directive('mask', vMaskV3);
 

 var vm = app.mount('#app');
 
 store.commit('increment'); 
 console.log(store.state.count) 

 

 
 

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 