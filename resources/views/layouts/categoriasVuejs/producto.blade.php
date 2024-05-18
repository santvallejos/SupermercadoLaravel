@extends('quickmart')

@section('title', 'Lacteos')

@section('content')
    <br>
    <div id="app">
        <homecategorias></homecategorias>
        
    
        
    </div>

    <!-- Incluye el archivo app.js donde se encuentra la configuración de Vue -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
