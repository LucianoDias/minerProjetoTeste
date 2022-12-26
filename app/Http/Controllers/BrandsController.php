<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->paginate(10); 
        return view('brands.index', compact('brands'));  
    }

    public function create(){ return view('brands.create'); }

    public function store(Request $request)
    {
        Brand::create($request->only('title') );
        return redirect()->route('brands.index')->withSuccess(__('Marca criado com sucesso.'));
    }

    public function show(Brand $brand)
    {
        return view('brands.show', ['brand' => $brand]);
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit', ['brand' => $brand]);
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->only('title'));
        return redirect()->route('brands.index')->withSuccess(__('Marca atualizado com sucesso.'));
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->withSuccess(__('Marca deletado com sucesso.'));
    }
}
