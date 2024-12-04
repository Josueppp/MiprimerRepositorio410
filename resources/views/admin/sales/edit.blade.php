@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Editar Información de la Venta</h1>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger mb-3">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <form action="{{ route('sales.update', $sale->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f4e6;">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="client_id" class="form-label">ID Cliente</label>
            <input type="text" name="client_id" id="client_id" value="{{ $sale->client_id }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="product_id" class="form-label">ID Producto</label>
            <input type="text" name="product_id" id="product_id" value="{{ $sale->product_id }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Fecha de la venta</label>
            <input type="date" name="sale_date" id="sale_date" value="{{ $sale->sale_date }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #e6c88d; border-color: #e6b17b;">Guardar</button>
    </form>
</div>

@endsection
