@extends('quickmart')

@section('title' , 'Preguntas Frecuentes')

    
    <link rel="stylesheet" href="{{ asset('css/botonVolver.css') }}">
    <script src="{{ asset('js/preguntasFrecuentes.js') }}"></script>

@section('content')
    <div id="App">
      <preguntas/>
    </div>
@endsection