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
}
