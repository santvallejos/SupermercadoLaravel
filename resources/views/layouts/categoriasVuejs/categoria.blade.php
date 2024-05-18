@extends('quickmart')

@section('title', 'Categorias')

@section('content')
    <br>
    <div id="app">
        <categoria></categoria>
    
        
    </div>

    <!-- Incluye el archivo app.js donde se encuentra la configuración de Vue -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
