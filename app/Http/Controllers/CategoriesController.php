<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10); 
        return view('categories.index', compact('categories'));
    }

    public function create(){ return view('categories.create'); }

    public function store(Request $request)
    {
        Category::create($request->only('title') );
        return redirect()->route('categories.index')->withSuccess(__('Categoria criado com sucesso.'));
    }

    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->only('title'));
        return redirect()->route('categories.index')->withSuccess(__('Categoria atualizado com sucesso.'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->withSuccess(__('Categoria deletado com sucesso.'));
    }
}
