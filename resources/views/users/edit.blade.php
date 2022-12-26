@extends('layouts.app')

@section('content')
    <h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Atualizar dados do usuário.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Usuário</h3>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input value="{{ $user->name }}" type="text" class="form-control" name="name" placeholder="Nome" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}" type="email" class="form-control" name="email" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ $user->username }}" type="text" class="form-control" name="username" placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Funções</label>
                    <select class="form-control" 
                        name="role" required>
                        <option value="">Selecioner Função</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ in_array($role->name, $userRole) ? 'selected': '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</button>
            </form>
        </div>

    </div>
@endsection