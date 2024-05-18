<!-- Lacteos.vue -->
<template>
    <div>
      <h1>Esta es la página de lácteos</h1>
      <categorias/>
    </div>
  </template>
  

  <script>

  export default {
    name: 'CarruselCategorias',  // Definimos un nombre para el componente
    mounted() {
      console.log('Carrusel de Categorías montado.');
  }}
  </script>
  

<style>
/* Aquí importa tu archivo CSS */
@import url('/css/vue/categorias.css');
</style>