@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Registrar Clientes</h1>
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
    <form action="{{ route('clients.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f4e6;">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Apellido Paterno</label>
            <input type="text" name="last_name" id="last_name" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="second_last_name" class="form-label">Apellido Materno</label>
            <input type="text" name="second_last_name" id="second_last_name" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="number" name="phone" id="phone" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #e6c88d; border-color: #e6b17b;">Registrar</button>
    </form>
</div>

@endsection