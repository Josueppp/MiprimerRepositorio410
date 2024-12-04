@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Editar Dirección</h1>
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
    <form action="{{ route('addresses.update', $address->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f4e6;">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="street" class="form-label">Calle</label>
            <input type="text" name="street" id="street" value="{{ $address->street }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="internal_num" class="form-label">Número interior</label>
            <input type="text" name="internal_num" id="internal_num" value="{{ $address->internal_num }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="external_num" class="form-label">Número exterior</label>
            <input type="text" name="external_num" id="external_num" value="{{ $address->external_num }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="neighborhood" class="form-label">Vecindario</label>
            <input type="text" name="neighborhood" id="neighborhood" value="{{ $address->neighborhood }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="town" class="form-label">Ciudad</label>
            <input type="text" name="town" id="town" value="{{ $address->town }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">Estado</label>
            <input type="text" name="state" id="state" value="{{ $address->state }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">País</label>
            <input type="text" name="country" id="country" value="{{ $address->country }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="postal_code" class="form-label">Código postal</label>
            <input type="text" name="postal_code" id="postal_code" value="{{ $address->postal_code }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="references" class="form-label">Referencias</label>
            <input type="text" name="references" id="references" value="{{ $address->references }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <div class="mb-3">
            <label for="client_id" class="form-label">ID Cliente</label>
            <input type="text" name="client_id" id="client_id" value="{{ $address->client_id }}" class="form-control" style="background-color: #fff6e6; border-color: #e6d6b3;">
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #e6c88d; border-color: #e6b17b;">Guardar</button>
    </form>
</div>

@endsection
