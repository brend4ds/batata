{{--resources/views/animais/index.blade.php--}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{route('animais.cadastrar')}}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>
 
<div class="w-full mt-12">
<p class="text-xl pb-3 flex items-center"><i class="fas fa-paw pr-1"></i>Animais para Adoção</p>
<div class="bg-white overflow-auto">
<table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
    <thead>
        <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Idade</th>
        </tr>
    </thead>
    <tbody>
    @foreach($animais as $animal)
        <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{ $animal['nome'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $animal['idade'] }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                <a class="px-3 py-1 font-semibold text-green-900 bg-green-200 border-b border-gray-200 rounded-full" href="{{ route('animais.editar', $animal['id']) }}">Editar</a>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                <a class="px-3 py-1 font-semibold text-red-900 bg-red-200 border-b border-gray-200 rounded-full" href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection