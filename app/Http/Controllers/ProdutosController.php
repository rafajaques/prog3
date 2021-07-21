<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['prods' => $produtos]);
    }

    public function show($id)
    {
        return view('produtos.show', ['id' => $id]);
    }

    public function create()
    {
        return view('produtos.create');
    }

}
