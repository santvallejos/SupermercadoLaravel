@extends('quickmart')

@section('title', 'Productos')

@section('content')
    <div class="masEleguidos">
        {{-- Bucle que mostrara todos los productos hasta llegar al ultimo --}}
        @foreach ($products as $item)
            <div class="productoMasEleguido">
                {{-- Imagen del producto --}}
                <img src="{{$item->image}}" alt="">
                <div class="infoMasEleguido">
                    {{-- Info del producto --}}
                    <h2>{{ $item->name }}</h2>
                    <p>${{ $item->price }}<p>
                </div>
                <div>
                    {{-- Boton para agregar productos al carrito --}}
                    <form action="{{ route('add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}" class="botonAgregar">
                        <input type="submit" name="btn" value="Agregar al carrito" class="botonAgregar">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
