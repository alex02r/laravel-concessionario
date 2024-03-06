<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function index(){
        $autos = Auto::with(['brand', 'optional'])->paginate(6);
        return response()->json([
            'success' => true,
            'results' => $autos 
        ]);
    }
    public function get_brand_autos($slug){
        $autos = Auto::with('brand', 'optionals')->where('brand.slug', $slug)->paginate(6);
        return response()->json([
            'success' => true,
            'results' => $autos
        ]);
    }
}
