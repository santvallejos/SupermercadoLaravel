require('./bootstrap');

require('./bootstrap');


// Importa Vue y los componentes homeCategoria, vistaProducto y Lacteos
import Vue from 'vue';
import VueRouter  from 'vue-router';
Vue.use(VueRouter);


import homecategorias from './components/homecategorias.vue'; // Asegúrate de tener la ruta correcta aquí


// Crea una instancia de Vue y registra los componentes
const app = new Vue({
  el: '#app',
    components: {
    homecategorias,
  }
});