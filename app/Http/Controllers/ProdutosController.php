<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index()
    {
        return view('produtos.index');
    }

    public function show($id)
    {
        return view('produtos.show', ['id' => $id]);
    }

    public function create()
    {
        return 'create';
    }

}
