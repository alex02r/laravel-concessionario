@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <h1>Brands</h1>
            <div>
                <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">Add brand</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-dark">
                <thead>
                    <th>Nome</th>
                    <th>Numero di telefono</th>
                    <th>Strumenti</th>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                    <tr>
                        <th>{{$brand->name}}</th>
                        <th>{{$brand->phone}}</th>
                        <th>
                            <a href="{{route('admin.brands.show', ['brand' => $brand->id])}}" class="btn btn-sm btn-primary">Visualizza</a>
                                <a href="{{ route('admin.brands.edit', ['brand'=>$brand->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                {{-- MODALE DELETE --}}
                                <button class="btn btn-sm square btn-danger" data-bs-toggle="modal" data-bs-target="#modal_brand_delete-{{ $brand->id }}">Delete</button>
                        </th>
                    </tr>
                    @include('admin.brands.modal_delete')
                    @endforeach 
                </tbody>
            </table>
        </div>
@endsection