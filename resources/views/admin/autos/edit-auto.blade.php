@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 shadow p-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.autos.update', ['auto'=>$auto]) }}" method="post">
                        @csrf
                        @method('PUT')
                        {{-- Marca --}}
                        {{-- 
                            <div class="mb-3">
                                <label for="brand" class="form-label">Modifica la Marca:</label>
                                <input type="text" class="form-control" name="brand" id="brand"  value="{{ old('brand') ?? $auto['brand'] }}">
                            </div> 
                        --}}
                            <div class="mb-3">
                                <label for="brand_id" class="form-label">Modifica il brand: </label>
                                <select name="brand_id" id="brand_id" class="form-select">
                                    <option >Seleziona un brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @selected( $brand->id == old('brand_id', $auto->brand_id ? $auto->brand_id : ''))>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        {{-- Modello --}}
                        <div class="mb-3">
                            <label for="model" class="form-label">Modifica il modello:</label>
                            <input type="text" class="form-control" name="model" id="model"  value="{{ old('model') ?? $auto['model'] }}">
                        </div>
                        {{-- Anno --}}
                        <div class="mb-3">
                            <label for="year" class="form-label">Modifica l'anno :</label>
                            <input type="number" min="1900" max="{{ date("Y") }}" class="form-control" name="year" id="year"  value="{{ old('year') ?? $auto['year'] }}">
                        </div>
                        {{-- Tipo --}}
                        <div class="mb-3">
                            <label for="type" class="form-label">Modifica Il tipo:</label>
                            <input type="text" class="form-control" name="type" id="type"  value="{{ old('type') ?? $auto['type'] }}">
                        </div>
                        {{-- Alimentazione --}}
                        <div class="mb-3">
                            <label for="fuel_type" class="form-label">Modifica L'alimentazione:</label>
                            {{-- select da aggiungere --}}
                            <input type="text" class="form-control" name="fuel_type" id="fuel_type"  value="{{ old('fuel_type') ?? $auto['fuel_type'] }}">
                        </div>
                        {{-- Cilindrata --}}
                        <div class="mb-3">
                            <label for="displacement" class="form-label">Modifica la cilindrata:</label>
                            <input type="number" min="800" class="form-control" name="displacement" id="displacement"  value="{{ old('displacement') ?? $auto['displacement'] }}">
                        </div>
                        {{-- Cavalli --}}
                        <div class="mb-3">
                            <label for="horsepower" class="form-label">Modifica i cavalli:</label>
                            <input type="number" min="40" class="form-control" name="horsepower" id="horsepower"  value="{{ old('horsepower') ?? $auto['horsepower'] }}">
                        </div>
                        {{-- descrizione --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Modifica la descrizione:</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') ?? $auto['description'] }}</textarea>
                        </div>
                        {{-- immagine --}}
                        <div class="mb-3">
                            <label for="img" class="form-label">Modifica l'immagine:</label>
                            <input type="text" class="form-control" name="img" id="img"  value="{{ old('img') ?? $auto['img'] }}">
                        </div>
                        {{-- prezzo --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">Modifica il prezzo:</label>
                            <input type="text" class="form-control" name="price" id="price"  value="{{ old('price') ?? $auto['price'] }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Modifica</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection