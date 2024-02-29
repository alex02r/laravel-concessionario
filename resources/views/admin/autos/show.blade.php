@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <h1>Autos</h1>
            <div>
                <a href="" class="btn btn-primary">Edit</a>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <img src="{{$auto->img}}" class="card-img-top img-fluid" alt="{{$auto->model}}">
                <div class="card-body">
                    <h4 class="card-title">{{$auto->brand}}</h4>
                    <h6>{{$auto->model}}, {{$auto->type}}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Anno: {{$auto->year}}</li>
                    <li class="list-group-item">Cilindrata e cavalli: {{$auto->displacement}}cc, {{$auto->horsepower}}CV</li>
                    <li class="list-group-item">Alimentazione: {{$auto->fuel_type}}</li>
                    <li class="list-group-item">Prezzo: {{$auto->price}}</li>
                </ul>
            </div>
        </div>
@endsection