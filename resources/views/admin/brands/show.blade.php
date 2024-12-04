@extends('layout.main_template')

@section('content')
<div class="container mt-4">
    <br>
    <br>
    <h1 class="text-center mb-4">Detalles de la Marca</h1>
    <br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Marca: {{$brand->brand}}</h3>
            <p class="card-text"><strong>Descripción:</strong> {{$brand->description}}</p>

            <!-- TODO Show Image -->
        </div>
    </div>
</div>
@endsection
