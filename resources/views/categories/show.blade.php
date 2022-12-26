@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Gerenciar categoria.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Categoria</h3>
        <div class="lead"></div>
        <div class="container mt-4">
            <div>Nome: {{ $category->title }}</div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('categories.index') }}" class="btn btn-default">voltar</a>
    </div>
@endsection