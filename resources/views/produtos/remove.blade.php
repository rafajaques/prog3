@extends('templates.base')
@section('title', 'Remover Produto')
@section('h1', 'Remover Produto')

@section('content')
<div class="row">
    <div class="col">

        <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>Cuidado!</strong> Você está prestes a remover o produto!
        </div>

        <p>Produto: {{$prod->nome}}</p>
        <p>Você tem certeza que deseja apagar este produto para sempre?</p>

        <form method="post" action="{{ route('produtos.delete', $prod) }}">
            @csrf
            @method('delete')
            
            <input type="submit" class="btn btn-danger" value="Pode apagar sem medo">
            <a href="{{ route('produtos') }}" class="btn btn-secondary">Desculpa, eu cliquei errado!</a>
        </form>

        

    </div>
</div>
@endsection