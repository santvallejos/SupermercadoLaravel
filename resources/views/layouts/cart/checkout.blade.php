@extends('quickmart')

@section('title', 'checkout')

@section('content')
<div>
    <div>
        <div>
            <div>
                {{-- Condicional que analizara la cantidad de productos que hay en el carrito para mostrarlos --}}
                @if(Cart::count())
                <table class="cartTable">
                    <thead>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Importe</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        {{-- Datos del producto --}}
                        @foreach (Cart::content() as $item)
                            <tr>
                                <td><img src="{{$item->options->image}}" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{number_format($item->price, 2)}}</td>
                                <td>{{number_format($item->qty * $item->price, 2)}}</td>
                                <td>
                                    {{-- Boton que eliminara uno o varios productos --}}
                                    <form action="{{ route('removeItem') }}" method="post" class="removeForm">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                    <input type="submit" name="btn" value="x">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        {{-- Valor total de la compra --}}
                        <tr class="subtotalRow">
                            <td colspan="3"></td>
                            <td>Total</td>
                            <td>{{Cart::subtotal()}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="cartActions">
                    <a href="{{ route('clear') }}">Vaciar Carrito</a>
                </div>
                {{-- Si no hay Productos --}}
                @else
                <div class="cartActions">
                    <a href="{{ url('productos') }}">Agregar Productos</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection