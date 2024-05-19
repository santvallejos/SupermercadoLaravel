@extends('quickmart')

@section('title', 'Productos')

@section('content')
<h3>esta es la seccion Productos</h3>
    <br>
    <div id="app">
        <productos></productos>

    </div>
{{-- @foreach ($products as $product) --}}
    
{{-- @endforeach --}}
    
{{-- <h4>{{ $products->nombre }}</h4>  --}}
    <!-- Incluye el archivo app.js donde se encuentra la configuración de Vue -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
