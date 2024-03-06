@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Add new auto</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.autos.store') }}" method="post">
                    @csrf
                    <div class="form-group my-3">
                        <label for="model" class="control-label">model</label>
                        <input type="text" name="model" id="model" placeholder="model" class="form-control">
                        @error('model')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="brand" class="control-label">brand</label>
                        <select name="brand_id" id="brand_id" class="form-select">
                            <option value="">Brand Selection</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="year" class="control-label">year</label>
                        <input name="year" type="number" min="2000" max="{{ date('Y') }}" step="1"
                            class="form-control" />
                        @error('year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="type">Type</label>
                        <select name="type" class="form-select" id="type">
                            <option selected>Choose...</option>
                            <option value="1">SUV</option>
                            <option value="2">Sedan</option>
                            <option value="3">Hatchback</option>
                            <option value="4">Coupé</option>
                            <option value="5">Convertible</option>
                        </select>
                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="fuel_type">Fuel</label>
                        <select name="fuel_type" class="form-select" id="fuel_type">
                            <option selected>Choose...</option>
                            <option value="1">Petrol</option>
                            <option value="2">Diesel</option>
                            <option value="3">Electric</option>
                            <option value="4">Hybrid</option>
                        </select>
                        @error('fuel_type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="displacement" class="control-label">displacement</label>
                        <input name="displacement" type="number" min="1000" max="4000" step="1"
                            class="form-control" />
                        @error('displacement')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="horsepower" class="control-label">horsepower</label>
                        <input name="horsepower" type="number" min="50" max="400" step="1"
                            class="form-control" />
                        @error('horsepower')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="100" rows="10"></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="img">Img</label>
                        <input name="img" class="form-control" type="url" name="url" id="url"
                            placeholder="https://example.com" pattern="https://.*" size="30" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
