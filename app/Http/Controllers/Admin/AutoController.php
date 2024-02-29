<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auto;
use App\Http\Requests\StoreAutoRequest;
use App\Http\Requests\UpdateAutoRequest;
use App\Http\Controllers\Controller;

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
        return view('admin.autos.index', compact('autos')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('#');
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

        $auto = new Auto();
        $auto->brand = $form_data['brand'];
        $auto->model = $form_data['model'];
        $auto->year = $form_data['year'];
        $auto->type = $form_data['type'];
        $auto->fuel_type = $form_data['fuel_type'];
        $auto->displacement = $form_data['displacement'];
        $auto->horsepower = $form_data['horsepower'];
        $auto->description = $form_data['description'];
        $auto->img = $form_data['img'];
        $auto->price = $form_data['price'];
        $auto->save();

        return redirect()->route('#');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('admin.autos.show', compact('auto')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        return view('admin.autos.edit-auto', compact('auto'));
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

        $auto = new Auto();
        $auto->update($form_data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        //
    }
}
