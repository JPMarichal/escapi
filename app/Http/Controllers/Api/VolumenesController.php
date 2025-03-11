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
}
