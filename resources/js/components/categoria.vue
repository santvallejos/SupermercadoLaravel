<!-- Lacteos.vue -->
<template>
    <div>
      <h1>Esta es la página de categorias</h1>
      <div id="app">
        <br>
        <div class="contCategorias">
            <div class="contFiltros">
                <!-- Contenido de la parte izquierda -->
                <p>filtros</p>
                <section class="filtro">
                </section>
            </div>
            <div class="galeriaProductos">
                <h3>galeriaProductos</h3>
            <vistaproductos></vistaproductos> <!-- Vista de productos en la primera línea -->
            <vistaproductos></vistaproductos> <!-- Vista de productos en la segunda línea -->
            <vistaproductos></vistaproductos> <!-- Vista de productos en la segunda línea -->
            </div>
        </div>
        <!-- {{-- <productos/> BORRAR Y --}}  -->
    </div>
        
     
    </div>
  </template>

  <script>
  export default {
    name: 'categoria',  // Definimos un nombre para el componente
    mounted() {
      console.log('Productos montados.');
  }}
  </script>
  
  <style>
  /* Aquí importa tu archivo CSS */
   @import url('/css/vue/categorias.css');
  </style>