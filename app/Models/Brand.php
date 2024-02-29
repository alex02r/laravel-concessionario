<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // INDICO I CAMPI FILLABLE
    protected $fillable = ['name', 'logo', 'phone', 'type_car'];

    public function autos()
    {
        return $this->hasMany(Auto::class);
    }
}
