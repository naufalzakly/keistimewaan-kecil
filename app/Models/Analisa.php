<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisa extends Model
{
    use HasFactory;
    protected $table = 'data_train';
    protected $guarded = ['id'];
    
}
