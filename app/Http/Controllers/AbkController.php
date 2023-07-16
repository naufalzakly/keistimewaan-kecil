<?php

namespace App\Http\Controllers;

use App\Models\Abk;
use App\Models\Gejala;
use Illuminate\Http\Request;

class AbkController extends Controller
{
    public function index(Request $request)
    {
        $gejala_id = $request->input("gejala");
        

        if (!empty($gejala_id)) {
            $abkk = Gejala::whereIn('id', $gejala_id)->get();
            $gejala_dipilih = Gejala::whereIn('id', $gejala_id)->get();;
            $total_pembilang =Gejala::whereIn('id', $gejala_id)->sum('bobot');
        }else {
            $abkk = null;
            $gejala_dipilih = null;
            $total_pembilang = null;
            
        }
        $total_penyebut =Gejala::all();
        return view('abk.index')->with([
            'abkk' => $abkk, 
            'gejala_dipilih' => $gejala_dipilih, 
            'total_pembilang' => $total_pembilang,
            'total_penyebut' => $total_penyebut,
            // 'nilai_pembilang' => $nilai_pembilang,
        ]);

    }


}
