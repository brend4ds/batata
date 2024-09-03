{{--resources/views/clientes/index.blade.php--}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a href="{{route('usuarios.cadastrar')}}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar usuário</a>
</p>

    <div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">Lista de usuários</p>
    <div class="bg-white overflow-auto">
    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
            <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Usuário</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Admin</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['name'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['email'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['username'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['admin'] }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                <a class="px-3 py-1 font-semibold text-green-900 bg-green-200 border-b border-gray-200 rounded-full" href="{{ route('usuarios.editar', $usuario['id']) }}">Editar</a>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                <a class="px-3 py-1 font-semibold text-red-900 bg-red-200 border-b border-gray-200 rounded-full" href="{{ route('usuarios.apagar', $usuario['id']) }}">Apagar</a>
        </tr>
    @endforeach
    </tbody>
</table>

</table>
@endsection
 