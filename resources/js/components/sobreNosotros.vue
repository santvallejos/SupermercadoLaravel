<template>
    <div class="bodySN"> 
        <br>
                <button class="volverAtras" onclick="goBack()">Atrás</button>
        <br>
            <div class="iconoSB">
                <img  src="https://i.postimg.cc/T38zbkDR/group-921347-1.png" alt="sobreNosotros">
                <h2>Sobre Nosotros</h2>
                <h3>Somos un grupo de empresarios de amplia trayectoria en el mercado.</h3>
            </div>
            <br>
            <div class="contenedorSB">
                    <div class="textoSN1">
                        QuickMart es el primer operador puro "online" en lanzarse al sector del supermercado por internet en la provincia de Corrientes. Nacido y pensado para hacer la compra de manera virtual ahorrando tiempo y dinero de manera fácil y segura.
                        Somos un grupo de empresarios de amplia trayectoria en el mercado regional, con experiencia en el retail online desde el año 2018 cuando lanzamos nuestra primera web (www.quickmart.com) buscando una solución para aquellas personas que tenían dificultades conjugando el tiempo para realizar las compras y el ritmo de vida actual.
                        www.quickmart.com es la solución para todas aquellas personas (que como nosotros) desean elegir adecuadamente cada producto desde la comodidad de sus casas, viendo todas las ofertas en un solo lugar, pensando en el ahorro y sin gastar de más. 
                        Ofrecemos más de 5 mil productos de primeras marcas (muchos de ellos ni siquiera están en los supermercados habituales).
                        Encontralos ordenados por categorías: Almacén, bebidas, congelados, lácteos, limpieza, mascotas, perfumería, quesos y fiambres, Hogar y electrodomésticos, y ofertas.   
                    </div>
            <br>
            <br>
                <div class="contenedorImagen">
                    <div class="columna1">
                        <img src="https://i.postimg.cc/1zS1kWmW/81603.jpg" alt="hombreSupermercado">
                    </div>
                    <div class="columna2">
                        <p>
                            "Con QuickMart.com, encontrarás todo lo que necesitas para tu hogar, desde la comodidad de tu sofá. ¡Ahorra tiempo, dinero y evita gastos innecesarios, todo en un solo lugar!"</p>
                    </div>
        </div> 
        <br>
                <div class="textoSN">
                        <p>Ofrecemos más de 11 mil productos de primeras marcas (muchos de ellos ni siquiera están en los supermercados habituales) Encontralos ordenados por categorías: Almacén, bebidas, congelados, lácteos, limpieza, mascotas, perfumería, quesos y fiambres y ofertas.</p>
                    </div>
                </div>
        
        <br><br><br>
            <div class="containerNosotros">
                <div class="column">
                    <div class="circle">
                        <img src="https://i.postimg.cc/QMt0NLTG/confident-stylish-guy-with-tattoos-posing-apartment-balcony.jpg" alt="Chico">
                    </div>
                </div>
                <div class="column">
                    <div class="circle">
                            <img src="https://i.postimg.cc/QxQ60J3P/restful-woman-with-dyed-hair-standing-crossed-hands-having-sincere-delightful-smile-demonstrating-he.jpg
                            " alt="Chica">
                    </div>
                </div>
                <div class="column">
                    <div class="circle">
                        <img src="https://postimg.cc/V0mggVY3" alt="daiana-zabala">
                    </div>
                </div>
            
            </div>
            <br> <div class="puestos">
                    <div class="boxSN">1</div>
                    <div class="boxSN">2</div>
                    <div class="boxSN">Daiana Antonella Zabala - 29 años- Estudiante de Licenciatura en Sistemas de informacion de segundo años </div>
                </div>
            <br>    
            <hr>           
            </div>
</template>

            <script>
            function goBack() {
            window.history.back();
            }
            </script>
            <script>
            export default {
              name: 'contacto',  // Definimos un nombre para el componente
              mounted() {
                console.log('Sobre nosotros montados.');
            }}
            </script>

<style>
.bodySN{
    background-color: #f2EEE4;
}
/*Primer bloque de texto*/
.textoSN1{
    background-color: #004d29;
    display: flex;
    justify-content: center;
    margin-left: 10%;
    margin-right:10%;
    padding: 2%;
   font-size: 20px;
   color: #f2EEE4;
   }
/*Bloque icono sobre nosotros*/
.iconoSB{
    text-align: center;
    color: #000000;
    font-size: 20px;
}
/*bloque de 2 columnas 1 con imagen
 y otra con texto.*/

.columna1 {
    width: 30%;
}

.columna1 img{
    width: 100%;
   }
.columna2 {
    width: 30%;
    height: 20%;
    text-align: center;
    margin: 3%;
    background-color: #f2EEE4;
}
.contenedorImagen {
    display: flex;
    flex: 1;
    text-align: center;
    justify-content: center;
    font-size: 20px; 
}
/*Texto alado de la imagen*/
.textoSN{
    width: 80%;
    display: flex;
    margin-left: 10%;
    margin-right: 10%;
    justify-content: center;
    background-color: #f2EEE4 ;
    font-size: 20px;
}
/*Bloque de contenedor con nuestras fotos
 y con una alguna información sobre nuestros "puestos"*/
.containerNosotros {
    display: flex;
    background-color: #ffde59;
    justify-content: space-around;
    }
.column{
    flex: 1;
    padding: 20px;
    text-align: center;
        display: flex;
    justify-content: center;
    align-items: center;   
    border-left: 1px solid #004d29; 
    border-right: 1px solid #004d29;     
}
.circle {
    width: 300px; /* Ancho de tu imagen */
    height: 300px; /* Alto de tu imagen */
    border-radius: 50%;
    overflow: hidden; /* Para ocultar cualquier parte de la imagen que se salga del círculo */
    border-left: 5px solid #004d29; 
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f2EEE4;
   
  }
  .circle img {
    width: 100%; /* Para que la imagen ocupe todo el espacio del contenedor circular */
    height: auto; /* Para mantener la proporción de la imagen */
    display: block; /* Para asegurarse de que la imagen se muestre como un bloque */
    justify-content: center;
    align-items: center;
  }
  .puestos {
    width: 100%;
    display: flex;
}

.boxSN {
    flex: 1;
    height: 100px; /* Altura de cada sección, ajusta según necesites */
    background-color: #ffde59; /* Color de fondo, puedes cambiarlo */
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px; /* Margen de 5px a cada lado */
    box-sizing: border-box; /* Incluye el padding y el borde en el ancho y alto */
    border-left: 1px solid #004d29; 
    border-right: 1px solid #004d29; 
}
  
   @media only screen and  (max-width: 575px) {
    .circle {
        width: 150px; /* Ancho más pequeño para el círculo en pantallas pequeñas */
        height: 150px; /* Alto más pequeño para el círculo en pantallas pequeñas */
        border-left: none; /* Elimina el borde izquierdo en pantallas pequeñas */
    }
    }
   
  @media only screen and (min-width: 574px) and (max-width: 768px){
       /* Ajustes para el primer bloque de texto */
    .textoSN1 {
        font-size: 18px; /* Ajusta el tamaño del texto */
        margin-left: 10%; /* Ajusta el margen izquierdo */
        margin-right: 10%; /* Ajusta el margen derecho */
        padding: 2%; /* Ajusta el padding */
    }

    /* Ajustes para el bloque de 2 columnas */
    .columna1, .columna2 {
        width: 45%; /* Cambia el ancho de las columnas */
    }

    /* Ajustes para el texto al lado de la imagen */
    .textoSN {
        font-size: 18px; /* Ajusta el tamaño del texto */
        margin-left: 10%; /* Ajusta el margen izquierdo */
        margin-right: 10%; /* Ajusta el margen derecho */
    }

    /* Ajustes para el contenedor con nuestras fotos */
    .containerNosotros {
        flex-direction: row; /* Cambia la dirección del flexbox a row */
    }

    /* Ajustes para las cajas de puestos */
    .box {
        height: 100px; /* Ajusta la altura de las cajas */
        margin: 10px; /* Ajusta el margen */
    }

    /* Ajustes para el círculo */
    .circle {
        width: 150px; /* Ancho del círculo más pequeño */
        height: 150px; /* Alto del círculo más pequeño */
        border-width: 3px; /* Grosor del borde del círculo más pequeño */
    }
      }

  
@media (min-width: 768px) and (max-width: 992px) {
    /* Ajustes para el primer bloque de texto */
    .textoSN1 {
        font-size: 18px; /* Ajusta el tamaño del texto */
        margin-left: 10%; /* Ajusta el margen izquierdo */
        margin-right: 10%; /* Ajusta el margen derecho */
        padding: 2%; /* Ajusta el padding */
    }

    /* Ajustes para el bloque de 2 columnas */
    .columna1, .columna2 {
        width: 45%; /* Cambia el ancho de las columnas */
    }

    /* Ajustes para el texto al lado de la imagen */
    .textoSN {
        font-size: 18px; /* Ajusta el tamaño del texto */
        margin-left: 10%; /* Ajusta el margen izquierdo */
        margin-right: 10%; /* Ajusta el margen derecho */
    }

    /* Ajustes para el contenedor con nuestras fotos */
    .containerNosotros {
        flex-direction: row; /* Cambia la dirección del flexbox a row */
    }

    /* Ajustes para las cajas de puestos */
    .box {
        height: 100px; /* Ajusta la altura de las cajas */
        margin: 10px; /* Ajusta el margen */
    }
    .circle {
        width: 150px; /* Ancho del círculo más pequeño */
        height: 150px; /* Alto del círculo más pequeño */
        border-width: 3px; /* Grosor del borde del círculo más pequeño */
    }
}

@media only screen and (min-width: 993px) and (max-width: 1260px){
      /* Ajustes para el primer bloque de texto */
    .textoSN1 {
        font-size: 22px; /* Ajusta el tamaño del texto */
        margin-left: 15%; /* Ajusta el margen izquierdo */
        
    
margin-right: 15%; /* Ajusta el margen derecho */
        padding: 3%; /* Ajusta el padding */
    }

    /* Ajustes para el bloque de 2 columnas */
    .columna1, .columna2 {
        width: 40%; /* Cambia el ancho de las columnas */
    }

    /* Ajustes para el texto al lado de la imagen */
    .textoSN {
        font-size: 22px; /* Ajusta el tamaño del texto */
        margin-left: 15%; /* Ajusta el margen izquierdo */
        margin-right: 15%; /* Ajusta el margen derecho */
    }

    /* Ajustes para el contenedor con nuestras fotos */
    .containerNosotros {
        flex-direction: row; /* Cambia la dirección del flexbox a row */
    }

    /* Ajustes para las cajas de puestos */
    .box {
        height: 120px; /* Ajusta la altura de las cajas */
        margin: 15px; /* Ajusta el margen */
    }

    /* Ajustes para el círculo */
    .circle {
        width: 250px; /* Ancho del círculo */
        height: 250px; /* Alto del círculo */
        border-width: 5px; /* Grosor del borde del círculo */
    } 
      }
@media only screen and (min-width: 1261px) and (max-width: 1690px){
       /* Ajustes para el primer bloque de texto */
    .textoSN1 {
        font-size: 24px; /* Ajusta el tamaño del texto */
        margin-left: 20%; /* Ajusta el margen izquierdo */
        margin-right: 20%; /* Ajusta el margen derecho */
        padding: 4%; /* Ajusta el padding */
    }

    /* Ajustes para el bloque de 2 columnas */
    .columna1, .columna2 {
        width: 35%; /* Cambia el ancho de las columnas */
    }

    /* Ajustes para el texto al lado de la imagen */
    .textoSN {
        font-size: 24px; /* Ajusta el tamaño del texto */
        margin-left: 20%; /* Ajusta el margen izquierdo */
        margin-right: 20%; /* Ajusta el margen derecho */
    }

    /* Ajustes para el contenedor con nuestras fotos */
    .containerNosotros {
        flex-direction: row; /* Cambia la dirección del flexbox a row */
    }

    /* Ajustes para las cajas de puestos */
    .box {
        height: 140px; /* Ajusta la altura de las cajas */
        margin: 20px; /* Ajusta el margen */
    }

    /* Ajustes para el círculo */
    .circle {
        width: 300px; /* Ancho del círculo */
        height: 300px; /* Alto del círculo */
        border-width: 7px; /* Grosor del borde del círculo */
    }
      }
</style>