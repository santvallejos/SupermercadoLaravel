@extends('quickmart'){{-- Esta vista extiende de quickmart --}}

{{-- Titulo --}}
@section('title', 'Inicio')

{{-- Contenido principal de la pagina --}}
@section('content')
    <div class="carrusel">
        <div class="mySlides">
            <img src="{{ asset('img/carruselImg1.jpg') }}" alt="imagen-1">
        </div>
        <div class="mySlides">
            <img src="{{ asset('img/carruselImg2.jpg') }}" alt="">
        </div>
        <div class="mySlides">
            <img src="{{ asset('img/carruselImg3.jpg') }}" alt="">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
@endsection