@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Crear Productos</h1>
    <br>
    <!-- Mostrar errores si existen -->
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
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f4e6;">
        @csrf

        <div class="mb-3">
            <label for="name_product" class="form-label">Nombre del Producto</label>
            <input type="text" name="name_product" id="name_product" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="brand_id" class="form-label">Marca</label>
            <select name="brand_id" id="brand_id" class="form-select" style="background-color: #fff6e6; border-color: #e6d6b3;">
                <option value="">Selecciona...</option>
                @foreach($brands as $brand => $id)
                    <option value="{{ $id }}">{{ $brand }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Cantidad</label>
            <input type="number" name="stock" id="stock" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="unit_price" class="form-label">Precio Unitario</label>
            <input type="text" name="unit_price" id="unit_price" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #e6c88d; border-color: #e6b17b;">Registrar</button>
    </form>
</div>

@endsection
