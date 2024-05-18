<template>
    <div>
      <br><br>
      <div class="contCategorias">
         <div class="contFiltros">
          <!-- Contenido de la parte izquierda -->
            <p>filtros</p>
             <section class="filtro">
              </section>
          </div>
          <div class="galeriaProductos">
            <!-- Contenido de la parte derecha -->
            <p>Galeria Productos</p>
              <section class="gallery">
                  <div class="product">
                    <a href="vistaProducto.php"><img class="productImg" src="img/descarga.jpg" alt="Imagen de Producto 1"></a>
                    <a href="" class="product-name">Producto 1></a>
                     <a href="" class="product-price">$20.00</a>
                              <a href="" class="product-description">Descripción del Producto 1.</a>
                                  </div>
                                  
                                  <div class="product">
                                      <a href=""><img class="productImg" src="img/Mayonesa-Natura-500-Ml-_1.webp" alt="Imagen de Producto 2"></a>
                                      <a href="" class="product-name">Producto 2</a>
                                      <a href="" class="product-price">$20.00</a>
                                      <a href="" class="product-description">Descripción del Producto 2.</a>
                                  </div>
                                  <div class="product">
                                      <a href=""><img class="productImg" src="product3.jpg" alt="Imagen de Producto 3"></a>
                                      <a href="" class="product-name">Producto 3</a>
                                      <a href="" class="product-price">$20.00</a>
                                      <a href="" class="product-description">Descripción del Producto 3.</a>
                                  </div>
                                  <div class="product">
                                      <a href=""><img class="productImg" src="producto1.jpg" alt="Imagen de Producto 4"></a>
                                      <a href="" class="product-name">Producto 4</a>
                                      <a href="" class="product-price">$20.00</a>
                                      <a href="" class="product-description">Descripción del Producto 4.</a>
                                  </div>
                            </section>
                        </div>
                </div>
        </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        productos: []
      };
    },
    mounted() {
      // Hacer una solicitud GET a la API para obtener los datos de los productos
      axios.get('/api/productos')
        .then(response => {
          // Almacenar los datos en el estado del componente
          this.productos = response.data;
        })
        .catch(error => {
          console.error('Error al cargar los productos:', error);
        });
    }
  };
  </script>
  
  <style>
  /* Aquí importa tu archivo CSS */
  @import url('/css/vue/categorias.css');
  </style>