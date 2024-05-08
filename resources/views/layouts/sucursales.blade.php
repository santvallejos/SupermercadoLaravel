@extends('quickmart')

@section('title', 'Sucursales')
<link rel="stylesheet" href="{{ asset('css/sucursales.css') }}">
@section('content')
<br>
<button class="volverAtras" onclick="goBack()">Atrás</button>

    <script>
    function goBack() {
    window.history.back();
    }
    </script>
<body class="sucursales">
    <br>
    <div class="iconoSucursales">
        <img  src="../img/location.png" alt="sucursales">
        <br>
        <br>
        <h2>Nuestra cobertura en la capital</h2>
        <br>
        <h3 class="tituloSu"> Nuestro supermercado online está abierto las 24 horas.</h3>
    </div>
    <br>
    <br>
    <div class="textoSucursales">
        <p>Descubre las tres sucursales de Supermercado Quickmart: 
            Con ubicaciones estratégicas en la ciudad, ofrecemos conveniencia y variedad en cada visita.</p>
            <p style="text-align: center;"> ¡Encuentra lo que necesitas cerca de ti en Supermercado Quickmart!</p>
         
    </div>
    <br>

    <div class="sectionSucursales">
        <br>
        <div class="sucursal1">
            <br>
                <div class="imagen"> <img src="../img/location_535239.png" alt="ubicacion"></div>
                <br>
                <h2>Centro Comercial Corrientes Sur</h2>
                <p> Ubicado en el centro de la ciudad, cerca de la plaza principal y rodeado de edificios residenciales y comerciales. Esta ubicación atraería a muchos clientes locales y turistas que visitan la zona.</p>
                <br>
                <h3 class="tituloSu">San Martin 1200</h3>
               <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.982493543492!2d-58.83830182468495!3d-27.469804376319576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca3cf4ed22d%3A0xb5b1ddddfafceaf9!2sSan%20Mart%C3%ADn%201200%2C%20W3400AQB%20Corrientes!5e0!3m2!1ses-419!2sar!4v1715036859390!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <br>
        </div>
        <div class="sucursal2">
            <br>     
                <div class="imagen"> <img src="../img/location_535239.png" alt="ubicacion"></div>
                 <br>
                 <h2>Avenida Costanera "Río Paraná"</h2>
                 <p>Una ubicación con vista al río Paraná, que atraería a residentes locales y turistas que disfrutan de paseos por la costanera. Sería conveniente para quienes buscan hacer compras después de un día al aire libre.
                    </p>
                    <br>
                    <h3 class="tituloSu">Av costanera 1500</h3>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3540.1245872592826!2d-58.848791878419085!3d-27.465380418369833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cb759536285%3A0x9405d9e6bbb5b145!2sCostanera%20Corrientes!5e0!3m2!1ses-419!2sar!4v1715037933497!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br>
        </div>
        <div class="sucursal3">
            <br>
             <div class="imagen"> <img src="../img/location_535239.png" alt="ubicacion"></div>
            <br>
           <h2>Barrio Universitario "Campus Norte"</h2>
           <p>Cerca de las universidades y centros educativos, esta ubicación sería ideal para los estudiantes y residentes cercanos que buscan conveniencia y variedad en sus compras diarias.
            </p>
            <br>
            <h3 class="tituloSu">Av libertad 1800</h3>
           <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.1767563511075!2d-58.78087132499931!3d-27.463756016452187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ae6ac9f699d%3A0xf821a9f37c1ad28f!2sAv.%20Libertad%2C%20Corrientes!5e0!3m2!1ses-419!2sar!4v1715037350375!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
          
        </div>
    </div>
    <br>
</body>
   
@endsection