<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $fillable = [
        'model', 
        'year', 
        'type', 
        'fuel_type', 
        'displacement', 
        'horsepower', 
        'description', 
        'img', 
        'price',
        'brand_id',
    ];

    

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function optionals(){
        return $this->belongsToMany(Optional::class);
    }
}
