<?php

use App\Http\Controllers\AnimaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais'); //quando acessar o get ele vai pegar a classe e acessar o index

Route::get('/animais/cadastrar', [AnimaisController::class, 'cadastrar']) -> name('animais.cadastrar');

Route::post('/animais/cadastrar', [AnimaisController::class, 'gravar']) -> name('animais.gravar');

Route::get('/animais/apagar/{animal}', [AnimaisController::class,'apagar']) -> name ('animais.apagar');//passar animal por parametro

Route::delete('/animais/apagar/{animal}', [AnimaisController::class,'apagar']);