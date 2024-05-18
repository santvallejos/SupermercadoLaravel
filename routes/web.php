<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('layouts.inicio');
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