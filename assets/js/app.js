import Vue from 'vue';
import Buefy from 'buefy'
import VueRouter from 'vue-router'; 

// app specific
import router from './routes';
import App from './views/App';
import 'buefy/dist/buefy.css'

Vue.use(VueRouter);
Vue.use(Buefy);
  
let demo = new Vue({
    el: '#app',
    router,
    template: '<app/>',
    components: { App }
})