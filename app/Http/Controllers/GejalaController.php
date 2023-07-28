<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index(Request $request)
    {
        $gejala = Gejala::all();

        // return view('gejala.index', compact('gejala'));
        return view('penyakit.index')->with([
            'gejala' => $gejala,
        ]);
    }

    
}