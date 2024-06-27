@extends('base')

@section('titulo', 'Editar | Animais para adoção')

@section('conteudo')
 <p>Edite o formulário</p>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

 <form action="{{ route('animais.editar', $animal->id) }}" method="post">
    @csrf
    @method('put')

    <p>
    <input value="{{ old('nome', $animal->nome ?? '') }}" type="text" name="nome" placeholder="Nome do animal" value=""></p>
    <p>
    <input value="{{ old('idade', $animal->idade ?? '') }}" type="number" name="idade" placeholder="Idade" value="">
    <input type="submit" value="Editar"></p>
 </form>

@endsection