
@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Gerenciar produtos.</legend></fieldset></h1>
    <div class="bg-light p-4 rounded">
        <h3>Produtos</h3>
        <div class="lead">
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right mt-2 mb-2">Novo produto</a>
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
            @foreach ($products as $key => $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">Ver</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">Editar</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $products->links("pagination::bootstrap-4") !!}
        </div>

    </div>
@endsection
