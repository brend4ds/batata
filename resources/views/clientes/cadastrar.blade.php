{{--views/animais/cadastrar.blade.php--}}

@extends('base')

@section('titulo', 'Cadastrar | Clientes Restaurante
')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form method="post" action="{{route ('clientes.gravar')}}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}"> 
    <br>
    <input type="text" name="endereco" placeholder="Endereco" value="{{ old('endereco') }}"> 
    <br>
    <input type="number" name="telefone" placeholder="Telefone" value="{{ old('telefone') }}"> 
    <br>
    <input type="date" name="data_nasc" placeholder="Data de Nascimento" value="{{ old('data_nasc') }}"> 
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection
