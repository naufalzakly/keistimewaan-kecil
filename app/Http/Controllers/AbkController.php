<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class AbkController extends Controller
{
    public function index(Request $request)
    {
        $abks[] = $request->input("gejala[]");
        dd($abks);
        $abk = Gejala::all();
        
        // return view('gejala.index', compact('gejala'));
        return view('abk.index')->with([
            'abk' => $abk
        ]);
        
    }
    public function store(Request $request)
    {
        $abks[] = $request->input("gejala[]");
        dd($abks);
        
        // return view('gejala.index', compact('gejala'));

        return redirect()->route('abk.index');
        
    }

    
}