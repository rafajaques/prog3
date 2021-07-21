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
@endsection
