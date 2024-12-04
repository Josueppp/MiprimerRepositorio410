@extends('layout.main_template')

@section('content')
<br>
<center>
    <h2>Index Productos</h2>
</center>
    <br>
    <center>
    <a class="btn btn-secondary" href="{{route('products.create')}}">Crear Producto</a>
</center>
    <br>
    <br>
<div class="container mt-5">
    <div class="container mt-5">
        <table class="table table-striped table-bordered mx-auto" style="background-color: #f0e6d2; border-color: #6c4f3d;">
            <thead style="background-color: #6c4f3d; color: #ffffff;">
                <tr>
                    <th class="text-center">Nombre del Producto</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Imagen</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr style="background-color: #faf3e0;"> 
                        <td class="text-center">{{$p->name_product}}</td>
                        <td class="text-center">{{$p->brand->brand}}</td>
                        <td class="text-center">{{$p->brand->description}}</td>
                        <td class="text-center">{{$p->stock}}</td>
                        <td class="text-center">{{$p->unit_price}}</td>
                        <td class="text-center">
                            <img src="/image/products/{{$p->imagen}}" width="60" alt="Producto">
                        </td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{route('products.show', $p)}}"> 
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('products.edit', $p)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('products.delete', $p)}}">
                                <i class="fa-regular fa-trash-can"></i>                    
                            </a>   
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

        
{{$products->links()}} <!-- Genera los enlaces de cada página-->
@endsection
