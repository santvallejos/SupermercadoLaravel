<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add(Request $request){
        $producto = Product::find($request->id);
        if(empty($producto))
            return redirect('/');
        Cart::add(
            $producto->id,
            $producto->name,
            1,
            $producto->price,
            ["image"=>$producto->image]
        );

        return redirect()->back()->with("succes","Item Agregado: ". $producto->name);
    }

    public function checkout(){
        return view('layouts.carrito.checkout');
    }

    public function removeItem(Request $request){
        Cart::remove($request->rowId);
        return redirect()->back()->with("succes","Item eliminado!");
    }

    public function clear(){
        Cart::destroy();
        return redirect()->back()->with("succes","Carrito Vacio!");
    }
}
