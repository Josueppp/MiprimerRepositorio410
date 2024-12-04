@extends('layout.main_template')

@section('content')
<div class="container mt-4">
    <br>
    <br>
    <h1 class="text-center mb-4">Detalles de la Dirección</h1>
<br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Calle: {{$address->street}}</h3>
            <p class="card-text"><strong>Número interior:</strong> {{$address->internal_num}}</p>
            <p class="card-text"><strong>Número exterior:</strong> {{$address->external_num}}</p>
            <p class="card-text"><strong>Vecindario:</strong> {{$address->neighborhood}}</p>
            <p class="card-text"><strong>Ciudad:</strong> {{$address->town}}</p>
            <p class="card-text"><strong>Estado:</strong> {{$address->state}}</p>
            <p class="card-text"><strong>País:</strong> {{$address->country}}</p>
            <p class="card-text"><strong>Código postal:</strong> {{$address->postal_code}}</p>
            <p class="card-text"><strong>Referencias:</strong> {{$address->references}}</p>
            <p class="card-text"><strong>ID Cliente:</strong> {{$address->client_id}}</p>

            <!-- TODO Show Image -->
        </div>
    </div>
</div>
@endsection
