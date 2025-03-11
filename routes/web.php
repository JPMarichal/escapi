<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VolumenesController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::get('/volumenes', [VolumenesController::class, 'index']);
});
