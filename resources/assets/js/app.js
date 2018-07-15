import VueRouter from 'vue-router'
import Vue from 'vue'
require('./bootstrap');

Vue.use(VueRouter);
import Create from './components/Articles/Create'
import ListItem from './components/Articles/ListItem'
import Index from './components/Articles/Index'
const router = new VueRouter({
    mode : 'history',
    routes: [
        {
            path : '/', component: Index , name: 'index'
        },
        {
          path : '/article/create', component: Create , name:'create'
        },
        {
          path : '/article/list_item', component: ListItem , name:'ListItem'
        }
    ]

})

Vue.component('example-component', require('./components/ExampleComponent.vue'));


const app = new Vue({
    el : "#app",
    router,
})