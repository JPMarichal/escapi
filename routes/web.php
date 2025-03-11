<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VolumenesController;
use App\Http\Controllers\Api\DivisionesController;
use App\Http\Controllers\Api\LibrosController;
use App\Http\Controllers\Api\PartesController;
use App\Http\Controllers\Api\CapitulosController;
use App\Http\Controllers\Api\PericopasController;
use App\Http\Controllers\Api\VersiculosController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    // Rutas base
    Route::get('/volumenes', [VolumenesController::class, 'index']);
    Route::get('/divisiones', [DivisionesController::class, 'index']);
    Route::get('/libros', [LibrosController::class, 'index']);
    Route::get('/partes', [PartesController::class, 'index']);
    Route::get('/capitulos', [CapitulosController::class, 'index']);
    Route::get('/pericopas', [PericopasController::class, 'index']);
    Route::get('/versiculos', [VersiculosController::class, 'index']);

    // Rutas para obtener modelos específicos por ID
    Route::get('/volumenes/{id}', [VolumenesController::class, 'show']);
    Route::get('/divisiones/{id}', [DivisionesController::class, 'show']);
    Route::get('/libros/{id}', [LibrosController::class, 'show']);
    Route::get('/partes/{id}', [PartesController::class, 'show']);
    Route::get('/capitulos/{id}', [CapitulosController::class, 'show']);
    Route::get('/pericopas/{id}', [PericopasController::class, 'show']);
    Route::get('/versiculos/{id}', [VersiculosController::class, 'show']);

    // Rutas de relaciones descendentes
    Route::get('/volumenes/{id}/divisiones', [VolumenesController::class, 'divisiones']);
    Route::get('/volumenes/{id}/libros', [VolumenesController::class, 'libros']);
    
    Route::get('/divisiones/{id}/libros', [DivisionesController::class, 'libros']);
    
    Route::get('/libros/{id}/partes', [LibrosController::class, 'partes']);
    Route::get('/libros/{id}/capitulos', [LibrosController::class, 'capitulos']);
    
    Route::get('/partes/{id}/capitulos', [PartesController::class, 'capitulos']);
    
    Route::get('/capitulos/{id}/pericopas', [CapitulosController::class, 'pericopas']);
    Route::get('/capitulos/{id}/versiculos', [CapitulosController::class, 'versiculos']);
    
    Route::get('/pericopas/{id}/versiculos', [PericopasController::class, 'versiculos']);

    // Rutas de relaciones ascendentes
    Route::get('/divisiones/{id}/volumen', [DivisionesController::class, 'volumen']);
    
    Route::get('/libros/{id}/division', [LibrosController::class, 'division']);
    Route::get('/libros/{id}/volumen', [LibrosController::class, 'volumen']);
    
    Route::get('/partes/{id}/libro', [PartesController::class, 'libro']);
    
    Route::get('/capitulos/{id}/parte', [CapitulosController::class, 'parte']);
    Route::get('/capitulos/{id}/libro', [CapitulosController::class, 'libro']);
    
    Route::get('/pericopas/{id}/capitulo', [PericopasController::class, 'capitulo']);
    
    Route::get('/versiculos/{id}/pericopa', [VersiculosController::class, 'pericopa']);
    Route::get('/versiculos/{id}/capitulo', [VersiculosController::class, 'capitulo']);
});
