<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClienteController;

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

Route::get('/', [ProductosController::class,'index']);

Route::resource('productos',ProductosController::class);

// Rutas para el CRUD de clientes
Route::get('/clientes/', [ClienteController::class,'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class,'create'])->name('clientes.create');
Route::post('/clientes/store', [ClienteController::class,'store'])->name('clientes.store');
Route::get('/clientes/edit/{id}', [ClienteController::class,'edit'])->name('clientes.edit');
Route::patch('/clientes/update/{id}', [ClienteController::class,'update'])->name('clientes.update');
Route::delete('/clientes/destroy/{id}', [ClienteController::class,'destroy'])->name('clientes.destroy');
Route::get('/clientes/crearVenta/{id}', [ClienteController::class,'crearVenta'])->name('clientes.crearVenta');
Route::post('/clientes/registrarVenta', [ClienteController::class,'registrarVenta'])->name('clientes.registrarVenta');

