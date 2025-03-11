<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libros::all();
        return response()->json($libros);
    }

    public function show($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro);
    }

    public function partes($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->partes);
    }

    public function capitulos($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->capitulos);
    }

    public function division($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->division);
    }

    public function volumen($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->volumen);
    }
}
