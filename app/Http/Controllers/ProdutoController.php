<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar(){

        $produtos = Produto::all();

        foreach ($produtos as $produto){
            echo $produto->descricao . "<br>";
        }
    }
}
