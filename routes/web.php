<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais'); //quando acessar o get ele vai pegar a classe e acessar o index

Route::get('/animais/cadastrar', [AnimaisController::class, 'cadastrar']) -> name('animais.cadastrar');

Route::post('/animais/cadastrar', [AnimaisController::class, 'gravar']) -> name('animais.gravar');

Route::get('/animais/apagar/{animal}', [AnimaisController::class,'apagar']) -> name ('animais.apagar');//passar animal por parametro

Route::delete('/animais/apagar/{animal}', [AnimaisController::class,'deletar']);

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');

Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar']);



Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes'); //quando acessar o get ele vai pegar a classe e acessar o index

Route::get('/clientes/cadastrar', [ClientesController::class, 'cadastrar']) -> name('clientes.cadastrar');

Route::post('/clientes/cadastrar', [ClientesController::class, 'gravar']) -> name('clientes.gravar');

Route::get('/clientes/apagar/{animal}', [ClientesController::class,'apagar']) -> name ('clientes.apagar');//passar animal por parametro

Route::delete('/clientes/apagar/{animal}', [ClientesController::class,'apagar']);

