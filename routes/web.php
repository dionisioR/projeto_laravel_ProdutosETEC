<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use App\Models\Produtos;

Route::get('/', [ProdutosController::class, 'index'])->name('index');
Route::get('/detalhe/{id}', [ProdutosController::class, 'detalhe'])->name('detalhe');

Route::get('/produtos', function () {
    // Busca todos os produtos
    $produtos = Produtos::all();

    // Retorna como JSON (para teste rápido)
    return response()->json($produtos);
});