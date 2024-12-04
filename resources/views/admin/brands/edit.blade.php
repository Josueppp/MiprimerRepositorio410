@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Editar Marca</h1>
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
    <form action="{{ route('brands.update', $brand->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f4e6;">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="brand" class="form-label">Nombre de la Marca</label>
            <input type="text" name="brand" id="brand" value="{{ $brand->brand }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <input type="text" name="description" id="description" value="{{ $brand->description }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #e6c88d; border-color: #e6b17b;">Guardar</button>
    </form>
</div>

@endsection
