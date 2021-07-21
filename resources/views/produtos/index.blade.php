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
            <th>Nome</th>
            <th>Preço</th>
        </tr>

        @foreach($prods as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->nome}}</td>
            <td>{{$prod->preco}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
