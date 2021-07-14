<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', [ProdutosController::class, 'index']);

Route::get('/produtos/inserir', [ProdutosController::class, 'create']);

Route::get('/produtos/{id}', [ProdutosController::class, 'show']);