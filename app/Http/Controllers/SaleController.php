<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Sales\StoreRequest;
use App\Http\Requests\Sales\UpdateRequest;


use function Laravel\Prompts\alert;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::paginate(4);
        return view('admin/sales/index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients=Client::pluck('id', 'name');
        $products=Product::pluck('id', 'name_product');
        return view('admin/sales/create', compact('clients', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Sale::create($request->all());
        return to_route('sales.index') -> with ('status', 'Venta registrada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $sale = Sale::findOrFail($id);
    return view('sales.show', compact('sale'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        echo view('admin/sales/edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Sale $sale)
    {
        $sale->update($request->all());
        return to_route('sales.index')->with('status', 'Venta actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Sale $sale)
    
    {
        echo view ('admin/sales/delete', compact('sale'));
    }


    public function destroy(Sale $sale)
    {
        $sale->delete();
        return to_route('sales.index')->with('status', 'Venta eliminada');
    }
}
