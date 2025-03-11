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
}
