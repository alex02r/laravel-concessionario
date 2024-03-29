@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-12">
                <h2>Add new Brand</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.brands.store') }}" method="post">
                    @csrf
                    <div class="form-group my-3">
                        <label for="name" class="control-label mb-1">Name</label>
                        <input type="text" name="name" id="name" placeholder="name" class="form-control">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="logo" class="control-label mb-1">logo</label>
                        <input class="form-control" type="logo" name="logo" id="logo"
                            placeholder="https://example.com" pattern="https://.*" size="30" />
                            @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="phone" class="control-label mb-1">phone</label>
                        <input type="text" name="phone" id="phone" placeholder="phone" class="form-control">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="type_car" class="control-label mb-1">type of car</label>
                        <input type="text" name="type_car" id="type_car" placeholder="type car" class="form-control">
                        @error('type_car')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection