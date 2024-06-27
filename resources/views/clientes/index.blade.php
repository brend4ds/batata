{{--resources/views/clientes/index.blade.php--}}

@extends('base')

@section('titulo', 'Clientes restaurante')

@section('conteudo')
<p>
    <a href="{{route('clientes.cadastrar')}}">Cadastrar cliente</a>
</p>
<p>Lista de clientes do restaurante</p>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
    </tr>

    @foreach($clientes as $cliente)
    <tr>
        <td>{{ $cliente['nome'] }}</td>
        <td>{{ $cliente['endereco'] }}</td>
        <td>{{ $cliente['telefone'] }}</td>
        <td>{{ $cliente['data_nasc'] }}</td>
        <td><a href="{{ route('clientes.apagar', $cliente['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

@endsection
 