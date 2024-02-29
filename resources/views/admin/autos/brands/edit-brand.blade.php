@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1 class="fw-bold">Modifica il brand {{ $brand->name }}</h1>  
        </div>
        <div class="col-10 mt-5">
            {{-- Condizione per ciclare gli errori da mostrare --}}
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
             {{-- FORM --}}
            <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="control-label">Nome</label>
                    <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" id="name" placeholder="Nome" required value="{{ old('name') ?? $brand->name }}">
                    @error ('name')
                        <div class="text-danger fw-semibold">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    @if ($brand->logo != null)
                        <img class="rounded-3 mb-3" src="{{ asset('/storage/' . $brand->logo) }}" alt="{{ $brand->name }}" width="250">
                    @else
                    <h6 class="fw-bold">Immagine del logo non impostata</h6>
                    @endif

                    <input type="file" name="logo" class="form-control @error ('logo') is-invalid @enderror" id="logo" placeholder="Immagine di copertina" value="{{ old('logo') ?? $brand->logo }}">
                    @error ('logo')
                        <div class="text-danger fw-semibold">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="control-label">Numero di telefono</label>
                    <input type="tel" name="phone" class="form-control @error ('phone') is-invalid @enderror" id="phone" placeholder="Numero di telefono" required value="{{ old('phone') ?? $brand->phone }}">
                    @error ('phone')
                        <div class="text-danger fw-semibold">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="mb-3">
                    <label for="type_car" class="control-label">Tipo di Autovettura</label>
                    <input type="text" name="type_car" class="form-control @error ('type_car') is-invalid @enderror" id="type_car" placeholder="Nome" required value="{{ old('type_car') ?? $brand->type_car }}">
                    @error ('type_car')
                        <div class="text-danger fw-semibold">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-warning px-5 fs-3">Modifica ora il brand</button>
                </div>
            </form>
        </div>
        <div class="col-10 text-center mt-5">
            <a href="/admin/brands" > <button class="btn btn-success">Torna indietro</button></a>
        </div>
    </div>
</div>
@endsection
