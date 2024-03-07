<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auto;
use App\Http\Requests\StoreAutoRequest;
use App\Http\Requests\UpdateAutoRequest;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Optional;
use Illuminate\Support\Facades\Storage;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return view('admin.autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $optionals = Optional::all();
        return view('admin.autos.create', compact('brands', 'optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutoRequest $request)
    {
        $form_data = $request->all();
        $auto = new auto();
        if ($request->hasFile('img')) {
            $path = Storage::disk('public')->put('img', $form_data['img']);
            $form_data['img'] = $path;
        }


        $auto->fill($form_data);

        if ($request->has('optionals')) {
            $auto->optionals()->attach($form_data['optionals']);
        }
        $auto->save();

        return redirect()->route('admin.autos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('admin.autos.show', compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        $brands = Brand::all();
        $optionals = Optional::all();

        return view('admin.autos.edit-auto', compact('auto', 'brands', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutoRequest  $request
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutoRequest $request, Auto $auto)
    {
        $form_data = $request->all();
        
        if ($request->has('optionals')) {
            $auto->optionals()->sync($form_data['optionals']);
        } else {
            $auto->optionals()->sync([]);
        }

        $auto->update($form_data);
        
        return redirect()->route('admin.autos.show', ['auto'=>$auto]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();

        return redirect()->route('admin.autos.index');
    }
}
