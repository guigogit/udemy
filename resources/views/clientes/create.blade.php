@extends('clientes.layouts.principal')

@section('titulo','Cliente - Novo')

@section('conteudo')
    <h3>Novo cliente</h3>

    <form action="{{route ('clientes.store')}}" method = "POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="salvar">
    </form>
@endsection
