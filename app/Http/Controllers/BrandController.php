<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Brands\StoreRequest;
use App\Http\Requests\Brands\UpdateRequest;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(4);
        return view('admin/brands/index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands=Brand::pluck('id', 'brand');
        return view('admin/brands/create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Brand::create($request->all());
        return to_route('brands.index') -> with ('status', 'Marca registrada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin/brands/show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        echo view('admin/brands/edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brand $brand)
    {
        $brand->update($request->all());
        return to_route('brands.index')->with('status', 'Marca actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(Brand $brand)
    
     {
         echo view ('admin/brands/delete', compact('brand'));
     }
     
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return to_route('brands.index')->with('status', 'Marca eliminada');
    }
}
