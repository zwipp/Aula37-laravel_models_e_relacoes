<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){

        //carrega todos os produtos da tabela
        $produtos = Produto::all();

        //carrega o produto do id dado
        $p = Produto::find(3);

        //carregar todas as categorias
        $categorias = Categoria::all();

        //carregar a categoria pelo id
        //$c = Categoria::find(3);

        //retornando a view listarProdutos.blade.php
        return view('listarProdutos',compact('produtos')); //compact = voce passa a string, ele vai procurar a variavel e criar um vetor associativo
    }
}
