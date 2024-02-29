<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 
        'model', 
        'year', 
        'type', 
        'fuel_type', 
        'displacement', 
        'horsepower', 
        'description', 
        'img', 
        'price'
    ];
}
