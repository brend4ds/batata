{{--views/animais/cadastrar.blade.php--}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')

{{-- @if($errors->any())
<div>

    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro())
    <p>{{ $erro }}</p>
    @endforeach

</div>
@endif --}}

<div class="flex flex-wrap">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-3 flex items-center">Formulário de Cadastro</p>
        <p>Preencha o formulário</p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{route ('animais.gravar')}}">
            @csrf
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Nome</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('nome') }}" id="nome" name="nome" type="text" required="" placeholder="Nome" aria-label="Nome">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="idade">Idade</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('idade') }}" id="idade" name="idade" type="number"  placeholder="Idade" aria-label="Idade">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Gravar</button>
            </div>
        </form>
    </div>
</div>


@endsection
