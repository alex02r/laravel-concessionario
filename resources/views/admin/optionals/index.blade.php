@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1 class="fw-bold">Optionals</h1>
                <a href="{{ route('admin.optionals.create') }}"> <button class="btn btn-sm btn-success ms-5">Add
                        Optional</button></a>

            </div>
            <div class="col-12 mt-5">
                <table class="table table-striped border">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Prezzo</th>
                            <th>TOOLS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($optionals as $optional)
                            <tr>
                                <td class="fw-bold">{{ $optional->id }}</td>
                                <td class="text-capitalize">{{ $optional->name }}</td>
                                <td>{{ $optional->price }}</td>
                                <td>
                                    <div class="d-flex">
                                        {{-- VIEW BUTTON --}}
                                        <a href="{{ route('admin.optionals.show', ['optional' => $optional->id]) }}"
                                            class="btn btn-sm square btn-primary"
                                            title="Visualizza i progetti per questo tipo"><i class="fas fa-eye"></i></a>

                                        <a href="{{ route('admin.optionals.edit', ['optional' => $optional->id]) }}"
                                            class="btn btn-sm square btn-warning mx-2"><i class="fas fa-edit"></i></a>

                                        {{-- MODALE DELETE --}}
                                        <button class="btn btn-sm square btn-danger" data-bs-toggle="modal" data-bs-target="#modal_optional_delete-{{ $optional->id }}">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @include('admin.optionals.modal_delete')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
