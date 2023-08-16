@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-3">

        <form action="/show" method="GET" class="shadow mt-5">
            <h4 class="text-center">Generador de codigo QR</h4>
            <div class="p-3">
                <label for="nameInput" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nameInput" name="name">
            </div>
            <div class="p-3">
                <label for="quantityInput" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="quantityInput" name="quantity">
            </div>
            <div class="p-3">
                <label for="phoneInput" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="phoneInput" name="phone">
            </div>
            <div class="p-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
            </div>
        </form>
    </div>
</div>
@stop
