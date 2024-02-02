<?php

namespace App\Http\Controllers;

use App\Models\Abk;
use App\Models\Gejala;
use App\Models\Analisa;

use Illuminate\Http\Request;

class AbkController extends Controller
{
    public function index()
    {
        return view('abk.index');
    }

}
   
