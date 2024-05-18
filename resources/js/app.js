// Importa Vue y los componentes homeCategoria, vistaProducto y Lacteos
import Vue from 'vue';

import homecategorias from './components/homecategorias.vue';
import vistaproductos from './components/vistaproductos.vue';
import lacteos from './components/lacteos.vue'; // Asegúrate de tener la ruta correcta aquí
import productos from './components/productos.vue';

// Crea una instancia de Vue y registra los componentes
const app = new Vue({
  el: '#app',
  components: {
    homecategorias,
    vistaproductos,
    lacteos,
    productos,
  }
});
const routes = [
    { path: '/lacteos', component: lacteos }
];

