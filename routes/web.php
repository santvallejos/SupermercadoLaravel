<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Por cada ruta que se genera, se mostra su vista respectiva
//  Route::get('/', function () {
//     return view('layouts.inicio');
//  });

Route::get('/', function () {

    //  $prod = new Product();
    //  $prod->nombre = 'Producto 1';
    //  $prod->categoria_id ='5';
    //  $prod->cantidad='2';
    //  $prod->slug = 'Producto 1';
    //  $prod->imagen_product='descarga.jpg';
    //  $prod->descripcion = 'Producto 1';
    //  $prod->precio= '1000';
    //  $prod->created_at = Carbon::now(); // Establecer la fecha de creación
    // $prod->updated_at = Carbon::now(); // Establecer la fecha de actualización

    // $prod-> save();
    // return $prod; //cargar productos rapido
    // $cat = Category::find(5)->products;//me muestra los productos de cat5
    // // $prod = Product::find(5)->category;
    // return $cat;
});


Route::get('/ofertas', function () {
    return view('layouts.ofertas');
});

Route::get('/sucursales', function () {
    return view('layouts.sucursales');
});


Route::get('/comoComprar', function () {
    return view('layouts.comoComprar');
});

Route::get('/sobreNosotros', function () {
    return view('layouts.sobreNosotros');
});

Route::get('/terminos', function() {
    return view('layouts.terminos');
});

Route::get('/preguntasFrecuentes', function() {
    return view('layouts.preguntasFrecuentes');
});

Route::get('/atencionAlCliente', function() {
    return view('layouts.atencionAlCliente');
});

Route::get('/metodosDePago', function() {
    return view('layouts.metodosDePago');
});

Route::get('/contacto', function () {
    return view('layouts.contacto');
});
Route::get('/retiro', function () {
    return view('layouts.retiro');
});

Route::get('/homeCategorias', function () {
    return view('layouts.categoriasVuejs.homeCategorias');
});

Route::get('/categoria', function () {
    return view('layouts.categoriasVuejs.categoria');
});

Route::get('/productos', function () {
    return view('layouts.categoriasVuejs.producto');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');