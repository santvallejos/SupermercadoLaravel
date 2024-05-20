@extends('quickmart')

@section('title', 'checkout')

@section('content')
<div>
    <div>
        <div>
            <div>
                @if(Cart::count())
                <table class="cart-table">
                    <thead>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Importe</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                            <tr>
                                <td><img src="{{$item->options->image}}" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{number_format($item->price, 2)}}</td>
                                <td>{{number_format($item->qty * $item->price, 2)}}</td>
                                <td>
                                    <form action="{{ route('removeItem') }}" method="post" class="remove-form">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                    <input type="submit" name="btn" value="x">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="subtotal-row">
                            <td colspan="3"></td>
                            <td>Total</td>
                            <td>{{Cart::subtotal()}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="cart-actions">
                    <a href="{{ route('clear') }}">Vaciar Carrito</a>
                </div>
                @else
                <div class="cart-actions">
                    <a href="{{ url('productos') }}">Agregar Productos</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection