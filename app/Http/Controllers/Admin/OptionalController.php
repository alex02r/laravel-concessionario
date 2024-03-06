<?php

namespace App\Http\Controllers\Admin;

use App\Models\Optional;
use App\Http\Requests\StoreOptionalRequest;
use App\Http\Requests\UpdateOptionalRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class OptionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $optionals = Optional::all();
        return view('admin.optionals.index', compact('optionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.optionals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOptionalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOptionalRequest $request)
    {
        $form_data = $request->all();

        // CREO LA NUOVA ISTANZA PER OPTIONAL PER SALVARLO NEL DATABASE
        $optonal = new Optional();

        // LO SLUG LO RECUPERO IN UN SECONDO MOMENTO, IN QUANTO NON LO PASSO NEL FORM
        $form_data['slug'] = Str::slug($form_data['name'], '-');
        // RECUPERO I DATI TRAMITE IL FILL
        $optonal->fill($form_data);

        // SALVO I DATI
        $optonal->save();
        
        return view('admin.optionals.show', compact('optional'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function show(Optional $optional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function edit(Optional $optional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOptionalRequest  $request
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOptionalRequest $request, Optional $optional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Optional  $optional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Optional $optional)
    {
        //
    }
}
