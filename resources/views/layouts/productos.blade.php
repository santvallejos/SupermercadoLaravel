@extends('quickmart')

@section('title', 'Productos')

@section('content')
    <div class="masEleguidos">
        @include('partials.msgCarrito')
        @foreach ($products as $item)
            <div class="productoMasEleguido">
                <img src="{{$item->image}}" alt="">
                <div class="infoMasEleguido">
                    <h2>{{ $item->name }}</h2>
                    <h2>${{ $item->price }}</h2>
                </div>
                <div>
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
