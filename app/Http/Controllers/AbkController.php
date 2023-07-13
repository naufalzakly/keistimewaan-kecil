<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class AbkController extends Controller
{
    public function index(Request $request)
    {
        $gejala_id = $request->input("gejala");
        if (!empty($gejala_id)) {
            $abk = Gejala::whereIn('id', $gejala_id)->get();
        }else {
            $abk = null;
        }

        return view('abk.index')->with([
            'abk' => $abk
        ]);

    }


}
