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
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <th>Nome</th>
                        <th>Brand</th>
                        <th>Prezzo</th>
                        <th>strumenti</th>
                    </thead>
                    <tbody>
                        @foreach ($autos as $auto)
                            <tr>
                                <td>{{ $auto->model }}</td>
                                <td>{{ $auto->brand != null ? $auto->brand->name : 'Non assegnato' }}</td>
                                <td>{{ $auto->price }}</td>
                                <td>
                                    <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}" 
                                        class="btn btn-sm btn-primary">Visualizza</a>
                                    <a href="{{ route('admin.autos.edit', ['auto' => $auto->id]) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    {{-- MODALE DELETE --}}
                                    <button class="btn btn-sm square btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal_auto_delete-{{ $auto->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endsection
