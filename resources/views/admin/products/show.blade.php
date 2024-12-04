@extends('layout.main_template')

@section('content')
<div class="container mt-4">
    <br>
    <h1 class="text-center mb-4">Detalles del Producto</h1>
<br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Producto: {{$product->name_product}}</h3>
            <br>
            <p class="card-text"><strong>Cantidad:</strong> {{$product->stock}}</p>
            <p class="card-text"><strong>Precio:</strong> ${{$product->unit_price}}</p>
            <div class="text-center mt-4">
                <img src="image/products/{{$product->imagen}}" class="img-fluid" alt="Imagen del producto" width="150">
            </div>
        </div>
    </div>
</div>
@endsection
