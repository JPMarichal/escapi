<?php

use Illuminate\Support\Facades\Route;
use L5Swagger\Http\Controllers\SwaggerController;
use App\Http\Controllers\Api\VolumenesController;
use App\Http\Controllers\Api\DivisionesController;
use App\Http\Controllers\Api\LibrosController;
use App\Http\Controllers\Api\PartesController;
use App\Http\Controllers\Api\CapitulosController;
use App\Http\Controllers\Api\PericopasController;
use App\Http\Controllers\Api\VersiculosController;
use App\Livewire\Escrituras\VistaCapitulo;
use App\Livewire\Escrituras\ComentariosCapitulo;
use App\Livewire\Escrituras\VistaVolumen;
use App\Livewire\Escrituras\VistaLibro;

Route::get('/', function () {
    return view('welcome');
});

// Vista de capítulos
Route::get('/escrituras/{libro}/{capitulo}', VistaCapitulo::class)->name('escrituras.capitulo');
Route::get('/escrituras/volumen/{volumen}', VistaVolumen::class)->name('escrituras.volumen');
Route::get('/escrituras/libro/{libro}', VistaLibro::class)->name('escrituras.libro');
Route::get('/escrituras/capitulo/{id}/comentarios', ComentariosCapitulo::class)->name('escrituras.comentarios');

Route::group(['prefix' => 'api'], function () {
    // Rutas de documentación
    Route::get('documentation', [SwaggerController::class, 'api'])->name('l5-swagger.default.api');
    Route::get('docs', [SwaggerController::class, 'docs'])->name('l5-swagger.default.docs');
    Route::get('docs.json', [SwaggerController::class, 'docs'])->name('l5-swagger.default.docs.json');

    // Volúmenes
    Route::get('volumenes', [VolumenesController::class, 'index']);
    Route::get('volumenes/{id}', [VolumenesController::class, 'show']);
    Route::get('volumenes/{nombre}', [VolumenesController::class, 'buscarPorNombre']);
    Route::get('volumenes/{id}/divisiones', [VolumenesController::class, 'divisiones']);
    Route::get('volumenes/{id}/libros', [VolumenesController::class, 'libros']);

    // Divisiones
    Route::get('divisiones', [DivisionesController::class, 'index']);
    Route::get('divisiones/item', [DivisionesController::class, 'buscarPorNombre']);
    Route::get('divisiones/{id}', [DivisionesController::class, 'show']);
    Route::get('divisiones/{id}/libros', [DivisionesController::class, 'libros']);
    Route::get('divisiones/{id}/volumen', [DivisionesController::class, 'volumen']);

    // Libros
    Route::get('libros', [LibrosController::class, 'index']);
    Route::get('libros/{id}', [LibrosController::class, 'show'])->where('id', '[0-9]+');
    Route::get('libros/{nombre}', [LibrosController::class, 'buscarPorNombre'])->where('nombre', '[^0-9]+');
    Route::get('libros/{id}/partes', [LibrosController::class, 'partes']);
    Route::get('libros/{id}/capitulos', [LibrosController::class, 'capitulos']);
    Route::get('libros/{id}/division', [LibrosController::class, 'division']);
    Route::get('libros/{id}/volumen', [LibrosController::class, 'volumen']);

    // Partes
    Route::get('partes', [PartesController::class, 'index']);
    Route::get('partes/item', [PartesController::class, 'buscarPorNombre']);
    Route::get('partes/{id}', [PartesController::class, 'show']);
    Route::get('partes/{id}/capitulos', [PartesController::class, 'capitulos']);
    Route::get('partes/{id}/libro', [PartesController::class, 'libro']);

    // Capítulos
    Route::get('capitulos', [CapitulosController::class, 'index']);
    Route::get('capitulos/item', [CapitulosController::class, 'buscarPorReferencia']);
    Route::get('capitulos/{id}', [CapitulosController::class, 'show']);
    Route::get('capitulos/{id}/pericopas', [CapitulosController::class, 'pericopas']);
    Route::get('capitulos/{id}/versiculos', [CapitulosController::class, 'versiculos']);
    Route::get('capitulos/{id}/parte', [CapitulosController::class, 'parte']);
    Route::get('capitulos/{id}/libro', [CapitulosController::class, 'libro']);

    // Pericopas
    Route::get('pericopas', [PericopasController::class, 'index']);
    Route::get('pericopas/item', [PericopasController::class, 'buscarPorTitulo']);
    Route::get('pericopas/{id}', [PericopasController::class, 'show']);
    Route::get('pericopas/{id}/versiculos', [PericopasController::class, 'versiculos']);
    Route::get('pericopas/{id}/capitulo', [PericopasController::class, 'capitulo']);

    // Versículos
    Route::get('versiculos', [VersiculosController::class, 'index']);
    Route::get('versiculos/item', [VersiculosController::class, 'buscarPorReferencia']);
    Route::get('versiculos/pasaje', [VersiculosController::class, 'buscarPorReferenciaCompleta']);
    Route::get('versiculos/{id}', [VersiculosController::class, 'show']);
    Route::get('versiculos/{id}/pericopa', [VersiculosController::class, 'pericopa']);
    Route::get('versiculos/{id}/capitulo', [VersiculosController::class, 'capitulo']);

    // Audio
    Route::get('/audio/{libro}/{capitulo}', function ($libro, $capitulo) {
        $capitulo = \App\Models\Capitulos::whereHas('libro', function($query) use ($libro) {
            $query->whereRaw('LOWER(nombre) = ? OR LOWER(abreviatura) = ?', 
                [strtolower($libro), strtolower($libro)]);
        })
        ->where('num_capitulo', $capitulo)
        ->first();

        if (!$capitulo || !$capitulo->url_audio) {
            return response()->json(['error' => 'Audio no encontrado'], 404);
        }

        return response()->json(['url' => $capitulo->url_audio]);
    });
});
