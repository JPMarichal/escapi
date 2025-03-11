<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pericopas;
use Illuminate\Http\Request;

class PericopasController extends Controller
{
    public function index()
    {
        $itemsPerPage = config('pagination.items_per_page.pericopas');
        $pericopas = Pericopas::paginate($itemsPerPage);
        return response()->json($pericopas);
    }

    public function show($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa);
    }

    public function versiculos($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->versiculos()->orderBy('num_versiculo', 'asc')->get());
    }

    public function capitulo($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->capitulo);
    }
}
