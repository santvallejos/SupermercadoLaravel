<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //Funcion de agregar un producto al carrito que recibe un parametro
    public function add(Request $request){
        //Utiliza el modelo Product para buscar un producto en la base de datos usando el ID proporcionado en la solicitud
        $producto = Product::find($request->id);
        //si el producto no se cuententra devuelve null y redirigue al usuario
        if(empty($producto))
            return redirect('/productos');
        //Se agrega el producto al carrito
        Cart::add(
            $producto->id,
            $producto->name,
            1,
            $producto->price,
            ["image"=>$producto->image]
        );

        // /Redirige al usuario de vuelta a la página desde donde hizo la solicitud y añade un mensaje flash indicando que el producto fue agregado con éxito al carrito.
        return redirect()->back()->with("succes","Item Agregado: ". $producto->name);
    }

    //Dirigue al usuario al sistema de carrito
    public function checkout(){
        return view('layouts.cart.checkout');
    }

    //Remueve uno o varios productos del carrito
    public function removeItem(Request $request){
        Cart::remove($request->rowId);
        return redirect()->back()->with("succes","Item eliminado!");
    }

    //Elimina todos los productos que se enecuentren en el carrito
    public function clear(){
        Cart::destroy();
        return redirect()->back()->with("succes","Carrito Vacio!");
    }
}
