<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //Funcion que retorna la vista donde se encuentran los productos
    public function index(){
        //La variable products se iguala a todos los productos que se encuentran en la base de datos
        $products = Product::all();
        //retorna la vista con la varaible definida anteriromente
        return view('layouts.Productos', compact("products"));
    }
}
