<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.inicio');
});

Route::get('/categorias', function () {
    return view('layouts.categorias');
});

Route::get('/sucursales', function () {
    return view('layouts.sucursales');
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

//Ruta donde se enceuntran los productos
Route::get('/productos', [App\Http\Controllers\FrontController::class, 'index']);

//rutas para acciones que se realicen en el sistema de compras
Route::post('carrito/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('carrito/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('carrito/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('carrito/removeitem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeItem');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('adminUserRole');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
/* Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@passwordReset')->name('password.reset'); */
/* Route::post('password/reset', 'Auth\ForgotPasswordController@passwordUpdate')->name('password.update');  */
Route::post('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'passwordUpdate'])->name('password.update');



Route::group([
    'middleware'    =>  ['auth','adminUserRole'],
    'prefix'        =>  'user'
],function(){
    Route::get('create','UserController@create')->name('user.create');
    Route::get('list','UserController@index')->name('user.index');
    Route::get('{user}/edit','UserController@edit')->name('user.edit');
    Route::post('store','UserController@store')->name('user.store');
    Route::post('search','UserController@searchUser')->name('user.search');
    Route::get('destroy','UserController@destroy')->name('user.destroy');
    Route::put('{user}/update', 'UserController@update')->name('user.update');
    Route::get('show','UserController@show')->name('user.show');
});


