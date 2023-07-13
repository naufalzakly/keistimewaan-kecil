<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejalas';
    protected $guarded = ['id'];
    public function abk(){
        return $this->belongsToMany(Abk::class, 'gejalas_abks', 'gejala_id', 'abk_id');
    
    }
}
