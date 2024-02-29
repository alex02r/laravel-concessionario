@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <h1>{{$brand->name}}</h1>
            <div>
                <a href="{{ route('admin.brands.edit', ['brand'=>$brand->id]) }}" class="btn btn-primary">Edit</a>
                 {{-- MODALE DELETE --}}
                {{-- <button class="btn btn-sm square btn-danger" data-bs-toggle="modal" data-bs-target="#modal_auto_delete-{{ $brand->id }}">Delete</button> --}}
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <img src="{{$brand->img}}" class="card-img-top img-fluid" alt="{{$brand->name}}" width="200">
                <div class="card-body">
                    <p>Numero di telefono: {{$brand->phone}}</p>
                    <p>Tipo di auto: {{$brand->type_car}}</p>
                </div>
            </div>
        </div>
        {{-- POP-UP MODALE --}}
        {{-- @include('admin.autos.modal_delete') --}}
@endsection