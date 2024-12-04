@extends('layout.main_template')

@section('content')
<div class="container mt-4">
    <br>
    <br>
    <h1 class="text-center mb-4">Detalles de la Venta</h1>
<br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">ID Venta: {{$sale->sale_id}}</h3>
            <p class="card-text"><strong>ID Cliente:</strong> {{$sale->client_id}}</p>
            <p class="card-text"><strong>ID Producto:</strong> {{$sale->product_id}}</p>
            <p class="card-text"><strong>Fecha de venta:</strong> {{$sale->sale_date}}</p>

            <!-- TODO Show Image -->
        </div>
    </div>
</div>
@endsection
