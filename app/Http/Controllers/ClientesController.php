<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $dados = Cliente::all();
        //dd($dados); //funcao mais importante do laravel
        return view('clientes.index', [
            'clientes' => $dados,
        ]);
    }
    public function cadastrar(){
        return view('clientes.cadastrar');
    }

    public function gravar(Request $form){//acessado animias.cadastrar via post, submetendo o form
        $dados = $form->validate([ //validar os dados antes do create
            'nome' => 'required',//campo nome temq  ser obrigatorio  
            'endereco' => 'required',
            'telefone' => 'required|integer', //campo idade temq ser obrig e inteiro
            'data_nasc' => 'required'
        ]);
        Cliente::create($dados);
        
        return redirect()->route('clientes');
    }

    public function apagar( Cliente $cliente){
        return view('clientes.apagar', [
            'cliente' => $cliente
        ]);
    }
}
