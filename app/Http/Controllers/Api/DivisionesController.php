<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Divisiones;
use Illuminate\Http\Request;

class DivisionesController extends Controller
{
    public function index()
    {
        $divisiones = Divisiones::all();
        return response()->json($divisiones);
    }

    public function show($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division);
    }

    public function libros($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division->libros);
    }

    public function volumen($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division->volumen);
    }
}
