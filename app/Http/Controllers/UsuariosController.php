<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $dados = Usuario::all();
        //dd($dados); //funcao mais import do laravel
        return view('usuarios.index', [
            'usuarios' => $dados,
        ]);
    }
    public function cadastrar(){
        return view('usuarios.cadastrar');
    }

    public function gravar(Request $form){//acessado animias.cadastrar via post, submetendo o form
        $dados = $form->validate([ //validar os dados antes do create
            'nome' => 'required',//campo nome temq  ser obrigatorio  
            'email' => 'required',
            'usuario' => 'required', //campo idade temq ser obrig e inteiro
            'senha' => 'required',
            'admin' => 'boolean'
        ]);
        Usuario::create($dados);
        
        return redirect()->route('usuarios');
    }

    public function apagar( Usuario $usuario){
        return view('usuarios.apagar', [
            'usuario' => $usuario
        ]);
    }

    public function editar(Usuario $usuario) {//apaga do banco
        return view('usuarios/editar', [
            'usuario' => $usuario
        ]);
    }

    public function editarGravar(Request $form, Usuario $usuario){
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'idade' => 'required|integer',
        ]);

        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuarios');
    }
}
