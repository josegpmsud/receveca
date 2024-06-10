<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class);
Route::resource('plans', App\Http\Controllers\PlanController::class);
Route::resource('contratos', App\Http\Controllers\ContratoController::class);
Route::resource('rols', App\Http\Controllers\RolController::class);
Route::resource('marcas', App\Http\Controllers\MarcaController::class);
Route::resource('tipos', App\Http\Controllers\TipoController::class);
Route::resource('usos', App\Http\Controllers\UsoController::class);
Route::resource('clases', App\Http\Controllers\ClaseController::class);
Route::resource('colors', App\Http\Controllers\ColorController::class);

