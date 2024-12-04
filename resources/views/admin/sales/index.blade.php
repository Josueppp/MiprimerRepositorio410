@extends('layout.main_template')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Index de clientes</h2>
    <a class="btn btn-secondary mb-3" href="{{ route('clients.create') }}">Agregar cliente</a>

    <table class="table table-dark table-striped">
           <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del cliente</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->mother_last_name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

