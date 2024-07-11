{{--resources/views/clientes/index.blade.php--}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a href="{{route('usuarios.cadastrar')}}">Cadastrar usuário</a>
</p>
<p>Lista de usuários</p>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Usuario</th>
        <th>Senha</th>
        <th>Admin</th>
    </tr>

    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario['nome'] }}</td>
        <td>{{ $usuario['email'] }}</td>
        <td>{{ $usuario['usuario'] }}</td>
        <td>{{ $usuario['senha'] }}</td>
        <td>{{ $usuario['admin'] }}</td>
        <td><a href="{{ route('usuarios.apagar', $usuario['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection
 