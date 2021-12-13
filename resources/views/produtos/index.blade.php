@extends('templates.base')
@section('title', 'Produtos')
@section('h1', 'Página de Produtos')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de produtos</p>

        <a class="btn btn-primary" href="{{route('produtos.inserir')}}" role="button">Cadastrar produto</a>
    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>Preço</th>
            @if (Auth::user() && Auth::user()->admin)
            <th>Gerenciar</th>
            @endif
        </tr>

        @foreach($prods as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>
                <a href="{{ route('produtos.show', $prod) }}">{{$prod->nome}}</a>
            </td>
            <td>R$ {{$prod->preco}}</td>
            @if (Auth::user() && Auth::user()->admin)
            <td>
                <a href="{{ route('produtos.edit', $prod) }}" class="btn btn-primary btn-sm" role="button"><i class="bi bi-pencil-square"></i> Editar</a>
                <a href="{{ route('produtos.remove', $prod) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash"></i> Apagar</a>
            </td>
            @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection
