<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('productos', \App\Http\Controllers\ProductoController::class);
Route::resource('empleados', \App\Http\Controllers\EmpleadoController::class);
Route::resource('clientes', \App\Http\Controllers\ClienteController::class);
Route::resource('produccion', \App\Http\Controllers\ProduccionController::class);
Route::resource('pedidos', \App\Http\Controllers\PedidoController::class);

