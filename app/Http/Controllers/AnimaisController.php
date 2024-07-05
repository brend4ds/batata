<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function apagar( Animal $animal){//mostra na tela a confirmacao
        return view('animais.apagar', [
            'animal' => $animal
        ]);
    }

    public function deletar(Animal $animal){
        $animal->delete();
        return redirect()->route('animais');
    }

    public function editar(Animal $animal) {//apaga do banco
        return view('animais/editar', [
            'animal' => $animal
        ]);
    }

    public function editarGravar(Request $form, Animal $animal){
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'idade' => 'required|integer',
        ]);

        $animal->fill($dados);
        $animal->save();
        return redirect()->route('animais');
    }

    
}


