@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <h1>Autos</h1>
            <div>
                <a href="{{ route('admin.autos.create') }}" class="btn btn-primary">Add auto</a>
            </div>
        </div>
        <div class="row">
            @foreach ($autos as $auto)
            <div class="col-3 my-3">
                <a href="{{route('admin.autos.show', ['auto' => $auto->id])}}">
                    <div class="card">
                        <img src="{{$auto->img}}" class="card-img-top" alt="{{$auto->model}}">
                        <div class="card-body">
                            <h4 class="card-title">{{$auto->brand}}</h4>
                            <h6>{{$auto->model}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
@endsection