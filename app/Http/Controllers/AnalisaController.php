<?php

namespace App\Http\Controllers;

use App\Models\Abk;
use App\Models\Analisa;
use Illuminate\Http\Request;

class AnalisaController extends Controller
{
    public function index(Request $request)
    {
        $analisis = Analisa::all();
        return view('analisa.index', compact('analisis'));
    }

    
}