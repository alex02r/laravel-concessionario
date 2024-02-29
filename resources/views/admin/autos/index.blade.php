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
                <div class="card">
                    <img src="{{$auto->img}}" class="card-img-top" alt="{{$auto->model}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$auto->brand}}</h4>
                        <h6>{{$auto->model}}</h6>
                        <a href="{{route('admin.autos.show', ['auto' => $auto->id])}}" class="btn btn-sm btn-primary">Visualizza</a>
                        <a href="{{ route('admin.autos.edit', ['auto'=>$auto->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                        {{-- MODALE DELETE --}}
                        <button class="btn btn-sm square btn-danger" data-bs-toggle="modal" data-bs-target="#modal_auto_delete-{{ $auto->id }}">Delete</button>
                    </div>
                </div>
            </div>
            {{-- POP-UP MODALE --}}
            @include('admin.autos.modal_delete')
            @endforeach
        </div>
@endsection