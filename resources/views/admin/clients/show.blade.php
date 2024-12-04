@extends('layout.main_template')

@section('content')
<div class="container mt-4">
    <br>
    <br>
    <h1 class="text-center mb-4">Detalles del Cliente</h1>
<br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">ID: {{$client->id}}</h3>
            <p class="card-text"><strong>Nombre:</strong> {{$client->name}}</p>
            <p class="card-text"><strong>Apellido paterno:</strong> {{$client->last_name}}</p>
            <p class="card-text"><strong>Apellido materno:</strong> {{$client->second_last_name}}</p>
            <p class="card-text"><strong>Email:</strong> {{$client->email}}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{$client->phone}}</p>

            <!-- TODO Show Image -->
        </div>
    </div>
</div>
@endsection
