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
                           
                           <a href="" class="nombre">$nombre</a>
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
/*VISTA PRODUCTOS DIV*/
.vistaProductos {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
   
}

.contenedorProductos {
    width: 80%;
    margin: 10% auto;
}

.sectionProductos{
    display: flex;
    justify-content: space-between;
}

.secciones {
    flex: 1; /* El 50% del ancho del contenedor */
    border: none; /* Eliminar el borde */
    padding: 0; /* Eliminar el relleno */
    box-sizing: border-box;
    display: block;
  
}

/* Opcional: estilos para la apariencia */
.secciones h2, .secciones p {
    margin: 0; /* Eliminar márgenes internos */
    padding: 10px; /* Añadir relleno interno */
    border: 1px solid #ccc; /* Borde de ejemplo */
    background-color: #f9f9f9; /* Color de fondo */
}
/*imagen PRODUCTO*/
img{
    width: 80%;
    height: 80%;

}
.descriProducto{
    margin-left: 10%;
    margin-right: 10%;
    background-color: grey;
    width: 80%;
    border: 1px solid black;
    display: block;
    justify-content: center;
}
/*LO QUE APARECE ALADO DE LA IMAGEN */
.seccionINFO {
    text-align: center;
    display: block;
    flex: 1; /* El 50% del ancho del contenedor */
    border: none; /* Eliminar el borde */
    padding: 0; /* Eliminar el relleno */
    box-sizing: border-box;
    display: block;
}

.seccionINFO a{
    display: block; /* Cambio de display a block */
    text-decoration: none; /* Eliminar subrayado de los enlaces */
}

.seccionINFO a:hover{
    display: block; /* Cambio de display a block */
    text-decoration: none; /* Eliminar subrayado de los enlaces */
}
.precio{
    font-size: 50px;
    font-family: Verdana, Geneva, sans-serif;
    color:green;
}

.nombre{
    font-family: Verdana, Geneva, sans-serif;
    font-size: 25px;
    color: black;
}

.favorito {
    width: 25px;
    height:25px;
    position: absolute;
    margin: 1px;
    opacity:100;
    
}

.favorito1 {
    width: 25px;
    height:25px;
    position: absolute;
    margin: 1px;
    opacity: 0; /* Empieza con opacidad 0 para que esté oculto */
}

.secciones:hover .favorito {
    opacity: 0; /* Oculta el favorito cuando se hace hover en la imagen */
}

.secciones:hover .favorito1 {
    opacity: 1; /* Muestra el favorito1 cuando se hace hover en la imagen */
}

</style>