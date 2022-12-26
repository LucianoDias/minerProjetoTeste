@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Atualizar categoria.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Categoria</h3>
        <div class="lead"></div>
        <div class="container mt-4">
            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nome</label>
                    <input value="{{ $category->title }}" type="text" class="form-control" name="title" placeholder="Nome do produto" required>
                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('categories.index') }}" class="btn btn-default">Voltar</a>
            </form>
        </div>

    </div>
@endsection