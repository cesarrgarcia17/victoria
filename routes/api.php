<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitanteController;



// Ruta del usuario autenticado
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Rutas para Categorías
Route::apiResource('categorias', CategoriaController::class);

// Rutas para Materiales
Route::apiResource('materiales', MaterialController::class);

// Rutas para Pedidos
Route::apiResource('pedidos', PedidoController::class);

//rutas para inventario
Route::apiResource('inventario', InventarioController::class);

//rutas para usuarios
Route::apiResource('usuarios', UsuarioController::class);

// Rutas para Solicitantes
Route::apiResource('solicitantes', SolicitanteController::class);