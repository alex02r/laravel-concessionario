@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-12">
                <h2>Add new Optional</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.optionals.store') }}" method="post">
                    @csrf
                    <div class="form-group my-3">
                        <label for="name" class="control-label mb-1">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="price" class="control-label mb-1">Price</label>
                        <input type="text" name="price" id="price" placeholder="price" class="form-control" required>
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <textarea name="description" class="form-control" id="description" rows="5" placeholder="Descrizione" required></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Create new Optional</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection