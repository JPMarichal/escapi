<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Volumenes;
use Illuminate\Http\Request;

class VolumenesController extends Controller
{
    public function index()
    {
        $volumenes = Volumenes::all();
        return response()->json($volumenes);
    }

    public function show($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen);
    }

    public function divisiones($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->divisiones);
    }

    public function libros($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->libros);
    }
}
