<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\PdfController;

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
    return view('/login');
});


/*Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/

Route::resource('sede',SedeController::class);
Route::resource('pedido',PedidoController::class);
Route::resource('inventario', 'App\Http\Controllers\InventarioController');
Route::resource('usuario', 'App\Http\Controllers\UsuarioController');
Route::get('imprimirpedidos','App\http\Controllers\PdfController@imprimirpedidos')->name('imprimirpedidos');
Route::get('imprimirsedes','App\http\Controllers\PdfController@imprimirsedes')->name('imprimirsedes');
Route::get('imprimirinventarios','App\http\Controllers\PdfController@imprimirinventarios')->name('imprimirinventarios');
Route::get('imprimirusuarios','App\http\Controllers\PdfController@imprimirusuarios')->name('imprimirusuarios');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', function () {
    return view('home');
});
Route::get('/layout', function () {
    return view('welcome');
});