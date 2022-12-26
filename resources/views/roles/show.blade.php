@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Gerenciar Permissões atribuídas.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>{{ ucfirst($role->name) }} Função</h3>
        <div class="lead"></div>
        <div class="container mt-4">
            <table class="table table-striped">
                <thead>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="1%">Guard</th> 
                </thead>

                @foreach($rolePermissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('roles.index') }}" class="btn btn-default">Voltar</a>
    </div>
@endsection