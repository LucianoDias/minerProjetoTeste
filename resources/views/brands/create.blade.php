@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Adicionar marca.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Novo marca</h3>
        <div class="lead"></div>
        <div class="container mt-4">
            <form method="POST" action="{{ route('brands.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nome</label>
                    <input value="{{ old('title') }}" type="text" class="form-control" name="title" placeholder="Nome da marca" required>
                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('brands.index') }}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
@endsection