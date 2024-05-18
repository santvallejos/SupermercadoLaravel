@extends('quickmart')

@section('title', 'Productos')

@section('content')
<h3>esta es la seccion Productos</h3>
    <br>
    <div id="app">
        <productos></productos>

    
        
    </div>

    <!-- Incluye el archivo app.js donde se encuentra la configuración de Vue -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
