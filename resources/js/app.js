/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Vuex from 'Vuex';
Vue.use (Vuex);

import VueAgile from 'vue-agile'
Vue.use(VueAgile)

//Vuex
const store = new Vuex.Store({
    state:{
        item:{}
    },
    mutations:{
        setItem(state,obj){
            state.item = obj;
        }
    }
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// ADMIN
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('top-menu', require('./components/layout/TopMenu.vue').default);
Vue.component('aside-menu', require('./components/layout/AsideMenu.vue').default);
Vue.component('page-component', require('./components/Page.vue').default);
Vue.component('breadcrumb-component', require('./components/Breadcrumb.vue').default);
Vue.component('panel-component', require('./components/Panel.vue').default);
Vue.component('alert-component', require('./components/Alert.vue').default);
Vue.component('small-box-component', require('./components/SmallBox.vue').default);
Vue.component('modal-component', require('./components/modal/Modal.vue').default);
Vue.component('modal-link-component', require('./components/modal/ModalLink.vue').default);
Vue.component('table-list-component', require('./components/TableList.vue').default);
Vue.component('form-component', require('./components/Formulario.vue').default);

Vue.component('tabela-lista-component', require('./components/TabelaLista.vue').default);

// Site
Vue.component('topo-component', require('./components/Topo.vue').default);
Vue.component('rodape-component', require('./components/Rodape.vue').default);
Vue.component('carousel-component', require('./components/Carousel.vue').default);
Vue.component('menu-component', require('./components/MenuCategoria.vue').default);
Vue.component('lista-component', require('./components/ListaProdutos.vue').default);
Vue.component('whats-component', require('./components/WhatsappButton.vue').default);
Vue.component('prod-detalle-component', require('./components/ProdDetalle.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
    components: {
		agile: VueAgile,
	}
});
