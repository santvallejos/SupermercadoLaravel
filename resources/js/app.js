require('./bootstrap');

require('./bootstrap');


// Importa Vue y los componentes homeCategoria, vistaProducto y Lacteos
import Vue from 'vue';
import VueRouter  from 'vue-router';
Vue.use(VueRouter);


import homecategorias from './components/homecategorias.vue'; // Asegúrate de tener la ruta correcta aquí
import sobreNosotros from './components/sobreNosotros.vue';
import cambiosydevoluciones from './components/retiro.vue';
import terminos from './components/terminos.vue';
import sucursales from './components/sucursales.vue';
import preguntas from './components/preguntas.vue';
import contacto from './components/contacto.vue';
import cambiosydevoluciones from './components/cambiosydevoluciones.vue';
import atencionAlCliente from './components/atencionAlCliente.vue';

// Crea una instancia de Vue y registra los componentes
const app = new Vue({
  el: '#app',
    components: {
      atencionAlCliente,
      cambiosydevoluciones,
      contacto,
      preguntas,   
      sobreNosotros,
      sucursales,
      homecategorias,
  }
});