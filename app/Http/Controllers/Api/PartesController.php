<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partes;
use Illuminate\Http\Request;

class PartesController extends Controller
{
    public function index()
    {
        $partes = Partes::all();
        return response()->json($partes);
    }

    public function show($id)
    {
        $parte = Partes::findOrFail($id);
        return response()->json($parte);
    }

    public function capitulos($id)
    {
        $parte = Partes::findOrFail($id);
        return response()->json($parte->capitulos);
    }

    public function libro($id)
    {
        $parte = Partes::findOrFail($id);
        return response()->json($parte->libro);
    }
}
