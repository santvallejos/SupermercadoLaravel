<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\Auth\ForgotPasswordController;

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
Route::get('/', function () {
    /* return view('layouts.inicio'); */
    $cat = Category::find(2)->products;
    return $cat;
});

Route::get('/ofertas', function () {
    return view('layouts.ofertas');
});

Route::get('/categorias', function () {
    return view('layouts.categorias');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
