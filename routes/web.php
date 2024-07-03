<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', App\Http\Controllers\UserController::class)->middleware('can:admin');

//Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('can:admin');
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class)->middleware('can:admin');
Route::resource('plans', App\Http\Controllers\PlanController::class)->middleware('can:admin');
Route::resource('contratos', App\Http\Controllers\ContratoController::class)->middleware('can:admin');
//Route::resource('rols', App\Http\Controllers\RoleController::class)->middleware('can:admin');
Route::resource('rols', App\Http\Controllers\RolController::class)->middleware('can:admin');
Route::resource('marcas', App\Http\Controllers\MarcaController::class)->middleware('can:admin');
Route::resource('tipos', App\Http\Controllers\TipoController::class)->middleware('can:admin');
Route::resource('usos', App\Http\Controllers\UsoController::class)->middleware('can:admin');
Route::resource('clases', App\Http\Controllers\ClaseController::class)->middleware('can:admin');
Route::resource('colors', App\Http\Controllers\ColorController::class);


Route::get('/contratos/create/{id}', [App\Http\Controllers\ContratoController::class, 'create_vehiculo'])->middleware('can:admin')->name('contratos.create_vehiculo');
Route::get('/vehiculos/create/{id}', [App\Http\Controllers\VehiculoController::class, 'create_cliente'])->middleware('can:admin')->name('vehiculos.create_cliente');
Route::get('/clientes/create/{cedula}', [App\Http\Controllers\ClienteController::class, 'create_cedula'])->middleware('can:admin')->name('clientes.create_cedula');

//Route::get('/contratos/filtrado/{id}', [App\Http\Controllers\ContratoController::class, 'indexFilter'])->middleware('can:admin')->name('contratos.indexFilter');

Route::get('/filtro', [App\Http\Controllers\ContratoController::class, 'filter'])->name('filtro');

//Route::get('/pedidos/filtrar', [PedidosController::class, 'filtrar'])->name('pedidos.filtrar');


Route::get('pdf_generator/{id}', [App\Http\Controllers\ContratoController::class,'pdf_generator_get']);
