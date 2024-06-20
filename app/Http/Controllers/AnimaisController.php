<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index(){
        $dados = Animal::all();
        //dd($dados); funcao mais import do laravel
        return view('animais.index', [
            'animais' => $dados,
        ]);
    }
    public function cadastrar(){
        return view('animais.cadastrar');
    }

    public function gravar(Request $form){//acessado animias.cadastrar via post, submetendo o form
        $dados = $form->validate([ //validar os dados antes do create
            'nome' => 'required',//campo nome temq  ser obrigatorio  
            'idade' => 'required|integer' //campo idade temq ser obrig e inteiro
        ]);
        Animal::create($dados);
        
        return redirect()->route('animais');
    }

    public function apagar( Animal $animal){
        return view('animais.apagar', [
            'animal' => $animal
        ]);
    }
}


