@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Gerenciar marca.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Marca</h3>
        <div class="lead"></div>
        <div class="container mt-4">
            <div>Nome: {{ $brand->title }}</div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('brands.index') }}" class="btn btn-default">voltar</a>
    </div>
@endsection