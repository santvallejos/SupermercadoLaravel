@extends('quickmart')

@section('title', 'Categorias')
    <link rel="stylesheet" href="{{ asset('css/categorias.css') }}">

@section('content')
    <br>
    <div id="app">
        <homecategorias></homecategorias>
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
            </div>
        </div>
        {{-- <productos/> BORRAR Y --}} 
    </div>
        
    <!-- Incluye el archivo app.js donde se encuentra la configuración de Vue -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
