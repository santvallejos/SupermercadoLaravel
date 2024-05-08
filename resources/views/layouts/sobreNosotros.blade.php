@extends('quickmart')

@section('title', 'Sobre Nosotros')

            <link rel="stylesheet" href="{{ asset('css/sobreNosotros.css') }}">
            
@section('content')
   
    <div class="bodySN"> 
        <br>
                <button class="volverAtras" onclick="goBack()">Atrás</button>

            <script>
            function goBack() {
            window.history.back();
            }
            </script>
        <br>
            <div class="iconoSB">
                <img  src="../img/group_921347 (1).png" alt="sobreNosotros">
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
                        <img src="../img/81603.jpg" alt="hombreSupermercado">
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
                        <img src="ruta/a/tu/imagen.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
                <div class="column">
                    <div class="circle">
                            <img src="ruta/a/tu/imagen.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
                <div class="column">
                    <div class="circle">
                        <img src="ruta/a/tu/imagen.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
            
            </div>
            <br> <div class="puestos">
                    <div class="box">1</div>
                    <div class="box">2</div>
                    <div class="box">3</div>
                </div>
            <br>    
            <hr>           
            </div>
@endsection