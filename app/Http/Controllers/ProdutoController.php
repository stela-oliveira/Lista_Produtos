<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::with('categoria')->get();  

        return view('produtos.index', compact('produtos'));
    }    
}
