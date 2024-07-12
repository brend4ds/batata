<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('iniciar');
}) -> name('index');

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

Route::delete('/clientes/apagar/{animal}', [ClientesController::class,'deletar']);


Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');

Route::get('/usuarios/cadastrar', [UsuariosController::class, 'cadastrar']) -> name('usuarios.cadastrar');

Route::post('/usuarios/cadastrar', [UsuariosController::class, 'gravar']) -> name('usuarios.gravar');

Route::get('/usuarios/apagar/{usuario}', [UsuariosController::class,'apagar']) -> name ('usuarios.apagar');//passar animal por parametro

Route::delete('/usuarios/apagar/{usuario}', [UsuariosController::class,'deletar']);

Route::get('/usuarios/editar/{usuario}', [UsuariosController::class, 'editar'])->name('usuarios.editar');

Route::put('/usuarios/editar/{usuario}', [UsuariosController::class, 'editarGravar']);

Route::get('login', [UsuariosController::class,'login'])->name('login');

Route::post('login', [UsuariosController::class,'login']);

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');