
@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Gerenciar marcas.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Marcas</h3>
        <div class="lead">
            <a href="{{ route('brands.create') }}" class="btn btn-primary btn-sm float-right mt-2 mb-2">Novo marca</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">Id</th>
             <th>Nome</th>
             <th width="3%" colspan="3">Ação</th>
          </tr>
            @foreach ($brands as $key => $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->title }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('brands.show', $brand->id) }}">Ver</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('brands.edit', $brand->id) }}">Editar</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $brand->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $brands->links("pagination::bootstrap-4") !!}
        </div>

    </div>
@endsection