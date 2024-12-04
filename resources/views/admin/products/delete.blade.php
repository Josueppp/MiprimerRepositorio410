@extends('layout.main_template')

@section('content')

<style>
    button {
        width: 120px;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: inline-block;
        color: #fff;
        background-color: #000;
    }

    h3 {
        width: 100%;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
        margin-bottom: 20px;
    }
</style>

<div class="container mt-5">
    <h3 class="text-center" style="background-color: #f8f4e6; padding: 10px; border-radius: 5px;">
        ¿Estás seguro que quieres eliminar el producto <span style="color: #e6b17b;">{{$product->name_product}}</span>?
    </h3>

    <div class="d-flex justify-content-center gap-3">
        <form action="{{route('products.index')}}">
            <button type="submit" class="btn btn-danger">No</button>
        </form>
        
        <form action="{{route('products.destroy', $product->id)}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-success">Sí</button>
        </form>
    </div>
</div>

@endsection
