@extends('layouts.app')

@section('content')
    <h1 class="mb-3 mb-4 mt-4">
        <fieldset><legend>Gerenciar usuário.</legend></fieldset>
    </h1>
    <div class="bg-light p-4 rounded">
        <h3>Usuário</h3>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                Nome: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Voltar</a>
    </div>
@endsection