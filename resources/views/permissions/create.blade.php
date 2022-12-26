@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Adicionar permissões.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Nova permissão</h3>
        <div class="lead"></div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('permissions.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Nome" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Voltar</a>
            </form>
        </div>

    </div>
@endsection