@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-8 offset-md-2 col-sm-8 offset-sm-2">
        <div class="card mt-5 shadow" style="width: 18rem;">
            <img src="{{ asset('storage/test.png') }}" alt="">
            <div class="card-body">
            <h5 class="card-title">Codigo QR</h5>
            <p class="card-text">
                Nombre: {{ $name }} </br>
                Cantidad: {{ $quantity }} </br>
                Telefono: {{ $phone }}
            </p>
            <a href="/" class="btn btn-primary">Regresar</a>
        </div>
    </div>
</div>
@stop
