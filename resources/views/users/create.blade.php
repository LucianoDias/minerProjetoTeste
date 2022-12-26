@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Adicionar usuário.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Novo usuário</h3>
        <div class="lead">Adicionar novo usuário e atribuir função</div>

        <div class="container mt-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Nome" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}"type="email" class="form-control" name="email" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input value="{{ old('username') }}"type="text" class="form-control" name="username" placeholder="Nome de login" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Voltar</a>
            </form>
        </div>

    </div>
@endsection
