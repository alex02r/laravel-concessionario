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
                <img src="{{$brand->logo}}" class="card-img-top" alt="{{$brand->name}}">
                <div class="card-body">
                    <p>Numero di telefono: {{$brand->phone}}</p>
                    <p>Tipo di auto: {{$brand->type_car}}</p>
                </div>
                <div class="card-body">
                        {{-- EDIT BUTTON --}}
                        <a href="{{ route('admin.brands.edit', ['brand' => $brand['id']]) }}">
                            <button type="button" class="btn btn-warning mx-2"><i class="fas fa-edit"></i> Edit brand</button>
                        </a>
                        {{-- MODALE DELETE --}}
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_brand_delete-{{ $brand->id }}"><i class="fas fa-trash"></i> Delete brand</button> 
                    </div>
            </div>
        </div>
        {{-- POP-UP MODALE --}}
        @include('admin.brands.modal_delete')
@endsection