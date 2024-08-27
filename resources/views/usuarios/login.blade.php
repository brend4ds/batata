@extends('base')

@section('titulo', 'Login')

@section('conteudo')


@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach

</div>
@endif

<form method="post" action="{{route('login')}}" class="p-10 bg-white rounded shadow-xl">
    @csrf
     <div class="">
        <label type="text"  placeholder="Usuários" class="block text-sm text-gray-600" for="username">Usuários</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" required="" name="username">
     </div>
     <div class="mt-2">
        <label type="password" placeholder="Senha" class="block text-sm text-gray-600" for="password">Senha</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" required="" name="password">
     </div>
     <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enviar</button>
     </div>
</form>

@endsection