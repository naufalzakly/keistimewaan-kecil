<?php

namespace App\Http\Controllers;
use App\Models\Analisa;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index(Request $request)
    {
        $gejala = Gejala::all();

        return view('penyakit.index', compact('gejala'));
    }

    public function store(Request $request)
    {
        $inputData = [];

        $attributes = [
            'KA1', 'KA2', 'KA3', 'KA4', 'KA5', 'KA6', 'KA7', 'KA8', 'KA9', 'KA10',
            'KH1', 'KH2', 'KH3', 'KH4', 'KH5', 'KH6', 'KH7', 'KH8', 'KH9', 'KH10',
            'KG1', 'KG2', 'KG3', 'KG4', 'KG5', 'KG6', 'KG7', 'KG8', 'KG9', 'KG10',
            // Add other columns as needed
        ];
        foreach ($attributes as $attribute) {
            $inputData[$attribute] = $request->input($attribute);
        }
        $selectedCheckboxes = $request->input('gejala', []);

        $dataTrain = []; // Define $dataTrain array
        foreach (Analisa::all() as $item) {
            $dataTrain[] = [
                'KA1' => $item->KA1,
                'KA2' => $item->KA2,
                'KA3' => $item->KA3,
                'KA4' => $item->KA4,
                'KA5' => $item->KA5,
                'KA6' => $item->KA6,
                'KA7' => $item->KA7,
                'KA8' => $item->KA8,
                'KA9' => $item->KA9,
                'KA10' => $item->KA10,
                'KH1' => $item->KH1,
                'KH2' => $item->KH2,
                'KH3' => $item->KH3,
                'KH4' => $item->KH4,
                'KH5' => $item->KH5,
                'KH6' => $item->KH6,
                'KH7' => $item->KH7,
                'KH8' => $item->KH8,
                'KH9' => $item->KH9,
                'KH10' => $item->KH10,
                'KG1' => $item->KG1,
                'KG2' => $item->KG2,
                'KG3' => $item->KG3,
                'KG4' => $item->KG4,
                'KG5' => $item->KG5,
                'KG6' => $item->KG6,
                'KG7' => $item->KG7,
                'KG8' => $item->KG8,
                'KG9' => $item->KG9,
                'KG10' => $item->KG10,
                // Add other columns as needed
            ];
        }
        $distances = [];
        $distances_rank = [];
        $classes = [];
      

        foreach ($dataTrain as $trainData) {
            $distance = $this->euclideanDistance($inputData, $trainData);
            $distances[] = $distance;
            $distances_rank[] = $distance;
        }
        asort($distances_rank);
        $nearestNeighbors = array_values($distances_rank);
        $rank = [];
        foreach ($dataTrain as $index => $trainData) {
            $rank[$index] = array_search($distances_rank[$index], $nearestNeighbors) + 1;
            $classes[] = $this->determineMostFrequentClass($distances_rank, 5);

        }

        $mostFrequentClass = $this->determineMostFrequentClass($distances_rank, 5);

        return view('abk.index')->with([
            'success' => 'Formulir berhasil diproses!',
            'distances' => $distances,
            'rank' => $rank,
            'selectedCheckboxes'=>$selectedCheckboxes,
            'classes' => $classes,
            'mostFrequentClass' => $mostFrequentClass,
        ]);
        

    }
    public function euclideanDistance($point1, $point2)
    {
        if (!is_array($point2)) {
            return INF; 
        }
    
        $sum = 0;
        foreach ($point1 as $key => $value) {
            if (array_key_exists($key, $point2)) {
                $sum += pow($value - $point2[$key], 2);
            } else {
                
                return INF;
            }
        }
    
        return sqrt($sum);
    }
    public function determineMostFrequentClass($rank, $k)
    {
        $topClasses = array_map('strval', array_slice($rank, 0, $k));
        $classCounts = array_count_values($topClasses);
        arsort($classCounts);
        $mostFrequentClass = key($classCounts);
        
        if ($mostFrequentClass >= 1 && $mostFrequentClass <= 170) {
            return 'Autis';
        } elseif ($mostFrequentClass >= 171 && $mostFrequentClass <= 340) {
            return 'Hyperaktif';
        } elseif ($mostFrequentClass >= 341 && $mostFrequentClass <= 500) {
            return 'Gifted';
        }
        return 'Unknown';
    }
}    