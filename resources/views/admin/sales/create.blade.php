@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Registro de Ventas</h1>
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
    <form action="{{ route('sales.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f4e6;">
        @csrf

        <div class="mb-3">
            <label for="client_id" class="form-label">ID Cliente</label>
            <select name="client_id" id="client_id" class="form-select" style="background-color: #fff6e6; border-color: #e6d6b3;">
                <option value="">Selecciona...</option>
                @foreach ($clients as $client => $id)
                    <option value="{{ $id }}">{{ $id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="product_id" class="form-label">ID Producto</label>
            <select name="product_id" id="product_id" class="form-select" style="background-color: #fff6e6; border-color: #e6d6b3;">
                <option value="">Selecciona...</option>
                @foreach ($products as $product => $id)
                    <option value="{{ $id }}">{{ $id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Fecha de Venta</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #e6c88d; border-color: #e6b17b;">Registrar</button>
    </form>
</div>

@endsection
