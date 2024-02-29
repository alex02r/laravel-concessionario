@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.autos.store') }}" method="post">
                    <div class="form-group my-3">
                        @csrf
                        <label for="brand" class="control-label">brand</label>
                        <input type="text" name="name" id="name" placeholder="name" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="model" class="control-label">model</label>
                        <input type="text" name="model" id="model" placeholder="model" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="brand" class="control-label">brand</label>
                        <input type="text" name="brand" id="brand" placeholder="brand" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="year" class="control-label">year</label>
                        <input type="number" min="2000" max="{{ date('Y') }}" step="1"
                            class="form-control" />
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="type">Options</label>
                        <select class="form-select" id="type">
                            <option selected>Choose...</option>
                            <option value="1">SUV</option>
                            <option value="2">Sedan</option>
                            <option value="3">Hatchback</option>
                            <option value="4">Coupé</option>
                            <option value="5">Convertible</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="fuel_type">Options</label>
                        <select class="form-select" id="fuel_type">
                            <option selected>Choose...</option>
                            <option value="1">Petrol</option>
                            <option value="2">Diesel</option>
                            <option value="3">Electric</option>
                            <option value="4">Hybrid</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="displacement" class="control-label">displacement</label>
                        <input type="number" min="1000" max="4000" step="1" class="form-control" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="horsepower" class="control-label">horsepower</label>
                        <input type="number" min="50" max="400" step="1" class="form-control" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="100" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="img">Img</label>
                        <input class="form-control" type="url" name="url" id="url"
                            placeholder="https://example.com" pattern="https://.*" size="30" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="control-label">horsepower</label>
                        <input type="number" min="1" max="99999" step="1" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
