<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $form_data = $request->all();
        
        $brand = new Brand();
        $brand->name = $form_data['name'];
        $brand->type_car = $form_data['type_car'];
        $brand->phone = $form_data['phone'];
        $brand->logo = $form_data['logo'];
        $brand->save();

        return redirect()->route('admin.brands.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.show', compact('brand')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {

        return view('admin.brands.edit-brand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $form_data = $request->all();

        // CREO LA NUOVA ISTANZA PER BRAND PER SALVARLO NEL DATABASE
        $brand = new Brand();

        // RECUPERO I DATI TRAMITE IL FILL
        $brand->fill($form_data);

        // SALVO I DATI
        $brand->save();

        // FACCIO IL REDIRECT ALLA PAGINA SHOW 
        return redirect()->route('admin.brands.show', ['brand' => $brand]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if($brand->logo != null){
            Storage::disk('public')->delete($brand->logo);
        }
        $brand->delete();

        return redirect()->route('admin.brands.index');
    }
}
