@extends('quickmart')

@section('title', 'Atencion al Cliente')
        <link rel="stylesheet" href="{{ asset('css/atencionAlCliente.css')}}">
         <link href="https://fonts.google.com/specimen/DM+Sans?query=dm"> 
            
@section('content')
    
    <div class="atencionAlCliente"><br>
    <button class="volverAtras" onclick="goBack()">Atrás</button>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
        <div class="encabezadoAC">
          <h1>imagen</h1>
        </div>
        <br>
        <br>
        <br>
        <div class="barraAC">
          <li><a href="{{ url('contacto') }}">Contacto</a></li>
          <li><a href="{{ url('preguntasFrecuentes') }}">Preguntas Frecuentes</a></li>
          <li><a href="{{ url('sucursales') }}">Sucursales</a></li>
          <li><a href="{{ url('preguntasFrecuentes#cambios') }}">Cambios y Devoluciones</a></li>
          <li><a href="{{ url('metodosDePago') }}">Metodos de pago</a></li>
        </div>
        <script src="app.js" type="text/javascript"></script>
        <br>
        <br>
        <br>
      </div>
@endsection