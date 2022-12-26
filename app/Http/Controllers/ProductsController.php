<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(){ return view('products.create'); }

    public function store(Request $request)
    {
        Product::create(array_merge($request->only('title', 'description'),[
            'user_id' => auth()->id()
        ]));
        return redirect()->route('products.index')->withSuccess(__('Produto criado com sucesso.'));
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->only('title', 'description'));
        return redirect()->route('products.index')->withSuccess(__('Produto atualizado com sucesso.'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->withSuccess(__('Produto deletado com sucesso.'));
    }



}
