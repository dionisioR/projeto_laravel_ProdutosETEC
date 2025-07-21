<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all()
        // ->where('pro_status', 1)
        ->toArray();
        return view('welcome', ['produtos' => $produtos]);
    }

    public function detalhe($id){
        $produto = Produtos::find($id);
        return view('detalhe', ['produto' => $produto]);
    }
}
