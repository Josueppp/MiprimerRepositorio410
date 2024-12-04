@extends('layout.main_template')

@section('content')
<br>
<center>
    <h2>Index Productos</h2>
</center>
    <br>
    <center>
    <a class="btn btn-secondary" href="{{route('brands.create')}}">Registrar marcas</a>
</center>
    <br>
    <br>
    <div class="container">
        <table class="table table-striped table-bordered mx-auto">
            <thead class="text-center">
                <tr>
                    <th> Nombre de la marca </th>
                    <th> Descripción </th>
                    <th> Acciones </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $b)
                    <tr>
                        <td class="text-center">{{$b->brand}}</td>
                        <td class="text-center">{{$b->description}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{route('brands.show', $b)}}"> 
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('brands.edit', $b)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('brands.delete', $b)}}">
                                <i class="fa-regular fa-trash-can"></i>                    
                            </a>   
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
@endsection
