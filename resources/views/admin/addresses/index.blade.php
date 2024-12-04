@extends('layout.main_template')

@section('content')
<br>
<center>
    <h2>Index Address</h2>
</center>
    <br>
    <center>
    <a class="btn btn-secondary" href="{{route('addresses.create')}}">Crear dirección</a>
</center>
    <br>
    <br>
    <div class="container">
        <table class="table table-striped table-bordered mx-auto">
            <thead class="text-center">
                <tr>
                    <th> Calle </th>
                    <th> Número interior </th>
                    <th> Número exterior </th>
                    <th> Vecindario </th>
                    <th> Ciudad </th>
                    <th> Estado </th>
                    <th> País </th>
                    <th> Código postal </th>
                    <th> Referencias </th>
                    <th> Código cliente </th>
                    <th> Acciones </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($addresses as $a)
                    <tr>
                        <td class="text-center">{{$a->street}}</td>
                        <td class="text-center">{{$a->internal_num}}</td>
                        <td class="text-center">{{$a->external_num}}</td>
                        <td class="text-center">{{$a->neighborhood}}</td>
                        <td class="text-center">{{$a->town}}</td>
                        <td class="text-center">{{$a->state}}</td>
                        <td class="text-center">{{$a->country}}</td>
                        <td class="text-center">{{$a->postal_code}}</td>
                        <td class="text-center">{{$a->references}}</td>
                        <td class="text-center">{{$a->client->id}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{route('addresses.show', $a)}}"> 
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('addresses.edit', $a)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('addresses.delete', $a)}}">
                                <i class="fa-regular fa-trash-can"></i>                    
                            </a>   
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
@endsection
