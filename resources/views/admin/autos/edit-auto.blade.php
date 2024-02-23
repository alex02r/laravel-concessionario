@extends('layout.app')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 shadow p-3">
                    <form action="{{ route('admin.autos.update', ['auto'=>$auto]) }}" method="post">
                        @csrf
                        @method('PUT')
                        
                    </form>
                </div>
            </div>
        </div>
    @endsection