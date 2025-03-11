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
    Route::get('/volumenes', [VolumenesController::class, 'index']);
    Route::get('/divisiones', [DivisionesController::class, 'index']);
    Route::get('/libros', [LibrosController::class, 'index']);
    Route::get('/partes', [PartesController::class, 'index']);
    Route::get('/capitulos', [CapitulosController::class, 'index']);
    Route::get('/pericopas', [PericopasController::class, 'index']);
    Route::get('/versiculos', [VersiculosController::class, 'index']);
});
