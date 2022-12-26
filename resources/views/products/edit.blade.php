@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Atualizar produto.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Produto</h3>
        <div class="lead"></div>
        <div class="container mt-4">
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nome</label>
                    <input value="{{ $product->title }}" type="text" class="form-control" name="title" placeholder="Nome do produto" required>
                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <input value="{{ $product->description }}" type="text" class="form-control" name="description" placeholder="Descrição" required>
                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('products.index') }}" class="btn btn-default">Voltar</a>
            </form>
        </div>

    </div>
@endsection