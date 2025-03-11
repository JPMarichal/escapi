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
}
