<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abk extends Model
{
    use HasFactory;
    
    public function gejala(){
        return $this->belongsToMany(Gejala::class, 'gejalas_abks', 'abk_id', 'gejala_id');
    
    }
}
