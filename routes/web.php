<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');

Route::get('/quienessomos', function () {
    return view('quienessomos');
})->name('quienessomos');

Route::get('/politica', function () {
    return view('politica');
})->name('politica');


Route::get('offline',function () {
    return view('vendor.laravelpwa.offline');
});

Route::get('productos', [ProductsController::class, 'show'])->name('productos.show');

Route::get('productos/busqueda', [ProductsController::class, 'busqueda'])->name('busqueda.simple');

Route::get('productos/buscar', [ProductsController::class, 'busquedaAvanzada'])->name('busqueda.avanzada');


Route::get('productos/{producto}', [ProductsController::class, 'productoVer'])->name('producto.mostrar');



Route::get('login', [UserController::class, 'login'])->name('user.login');

Route::get('registro', [UserController::class, 'register'])->name('user.registro');

Route::get('inicio', [UserController::class, 'sesion'])->middleware('auth')->name('user.sesion');


Route::post('validar-registro',[UserController::class, 'validar_register'])->name('validar.registro');

Route::post('inicia-sesion',[UserController::class, 'inicia_sesion'])->name('inicia.sesion');

Route::get('logout',[UserController::class, 'logout'])->name('user.logout');


Route::post('reseña',[ComentsController::class, 'store'])->name('calificar');

Route::get('agregar',[ProductsController::class,'agregar'])->name('agregar.productos');

Route::post('productos-agregar',[ProductsController::class,'store'])->name('productos.store');