@extends('layouts.app')

@section('content')
    <h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Gerenciar Funções e permissões.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Funções</h3>
        <div class="lead">
            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right mb-4">Nova Função</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">Id</th>
             <th>Nome</th>
             <th width="3%" colspan="3">Ações</th>
          </tr>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">Ver</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Editar</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $roles->links("pagination::bootstrap-4") !!}
        </div>

    </div>
@endsection
