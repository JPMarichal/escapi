<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Capitulos;
use Illuminate\Http\Request;

class CapitulosController extends Controller
{
    public function index()
    {
        $itemsPerPage = config('pagination.items_per_page.capitulos');
        $capitulos = Capitulos::paginate($itemsPerPage);
        return response()->json($capitulos);
    }
}
