<template>
    <div>
        <li><a href="categorias.php">Categorías</a></li>
        <div class="contenedorProductos">
            <div class="sectionProductos">
                <div class="secciones">
                    <img src="img/descarga.jpg" alt="leche">
                    <img class="favorito" src="img/heart_833472.png" alt="fav">
                    <img class="favorito1" src="img/heart_2077502 (1).png" alt="fav">
                </div>
                <div class="seccionINFO">
                            <a href="" class="nombre">Producto 1</a>
                            <br>
                            <a href="" class="precio">$20.00</a>
                            <br><br><br>
                            <a href="" >Cambios y devoluciones  ></a>
                            <br>
                            <a href="#">
                                <button>Agregar al carrito</button>
                            </a>
                </div>
            </div> 
            <br><br><br><br>
            <div class="descriProducto">
                <h2>Descripción</h2>
                <a href=""><h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate animi quos, exercitationem fugit amet, officia eaque commodi quod natus sapiente itaque sit iste nam porro repellat eius. Dignissimos vero inventore, quod quasi non, fugit animi cupiditate quos fuga enim itaque sit sint consequuntur tenetur maxime deserunt qui optio sapiente dicta. Quam impedit aliquid ipsum eum voluptate expedita neque eius id excepturi vel consectetur tenetur officia sed dolores, quia perferendis est, hic, itaque adipisci amet quo illum cupiditate alias! Doloribus assumenda adipisci sunt harum sequi temporibus qui eos iusto saepe modi libero sint cumque fuga, porro reiciendis veniam, recusandae voluptatum laborum?</h4></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'productos',  // Definimos un nombre para el componente
  mounted() {
    console.log('Productos montados.');
}}
</script>

<style>

 @import url('/css/vue/productos.css'); 
</style>