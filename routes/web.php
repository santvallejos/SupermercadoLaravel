<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
/* Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@passwordReset')->name('password.reset'); */
/* Route::post('password/reset', 'Auth\ForgotPasswordController@passwordUpdate')->name('password.update');  */
Route::post('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'passwordUpdate'])->name('password.update');
