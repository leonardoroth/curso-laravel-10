<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    // CADASTRO UPTADE
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    // ATUALIZAR UPTADE
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});

Route::prefix('Clientes')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    // CADASTRO UPTADE
    Route::get('/cadastrarClientes', [ProdutosController::class, 'cadastrarClientes'])->name('cadastrar.Clientes');
    Route::post('/cadastrarClientes', [ProdutosController::class, 'cadastrarClientes'])->name('cadastrar.Clientes');
    // ATUALIZAR UPTADE
    Route::get('/atualizarClientes/{id}', [ProdutosController::class, 'atualizarClientes'])->name('atualizar.Clientes');
    Route::put('/atualizarClientes/{id}', [ProdutosController::class, 'atualizarClientes'])->name('atualizar.Clientes');

    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('clientes.delete');
});