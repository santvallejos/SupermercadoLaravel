require('./bootstrap');

// Importa Vue y los componentes homeCategoria, vistaProducto y Lacteos
import Vue from 'vue';
import VueRouter  from 'vue-router';
Vue.use(VueRouter);


import homecategorias from './components/homecategorias.vue';
import vistaproductos from './components/vistaproductos.vue';
import categoria from './components/categoria.vue'; // Asegúrate de tener la ruta correcta aquí
import productos from './components/productos.vue';


// Crea una instancia de Vue y registra los componentes
const app = new Vue({
  el: '#app',
    components: {
    homecategorias,
    vistaproductos,
    productos,
    categoria,
    
  }
});

const routes = [
    { path: '/categoria', 
    component: categoria },
    ];

const router = new VueRouter({routes});
