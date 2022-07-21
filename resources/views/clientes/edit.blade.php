@extends('clientes.layouts.principal')

@section('conteudo')
    <h3>Novo cliente</h3>

    <form action="{{route ('clientes.update', $cliente['id']) }}" method = "POST">
        @csrf
        @method("PUT")
        <input type="texte" name="nome" value = "{{ $cliente['nome'] }}">
        <input type="submit" value="salvar">

    </form>
@endsection
