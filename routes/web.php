<?php

use Illuminate\Support\Facades\Route;
//dependencia al controlador
use App\http\Controllers\ProductoController;

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
Route::get('prueba', function(){
    return view('productos.new');

});

//Crear rutas rest
Route::resource('productos' , ProductoController::class);

