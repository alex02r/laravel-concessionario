@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center my-2">
                <h1>Optional</h1>
                <div>
                    <a href="{{ route('admin.optionals.edit', ['optional' => $optional->id]) }}" class="btn btn-primary">Edit</a>
                    {{-- MODALE DELETE --}}
                    <button class="btn btn-sm square btn-danger" data-bs-toggle="modal"
                        data-bs-target="#modal_optional_delete-{{ $optional->id }}">Delete</button>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $optional->name }}</h4>
                        <h6><strong>Descizione: </strong>{{ $optional->description }}</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prezzo: {{ $optional->price }}</li>
                    </ul>
                </div>
            </div>
            {{-- POP-UP MODALE --}}
            @include('admin.optionals.modal_delete')
        @endsection