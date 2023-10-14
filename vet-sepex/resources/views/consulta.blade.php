@extends('layouts.main')

@section('title')
    Cadastrar Consulta
@endsection

@section('content')
    <h1>Cadastrar Consulta</h1>
    <h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

    <form action="{{route('consultas.store')}}" method="POST">
        @csrf
        <label for="resumo">Resumo:</label>
        <input type="text" id="resumo" name="resumo">

        <label for="data">Data:</label>
        <input type="date" id="data" name="data">
        
        <label for="tratamento">Tratamento:</label>
        <select name="tratamento" id="tratamento">
            @foreach($tratamentos as $t)   
                <option value="{{$t->id}}">{{$t->descricao}}</option>
            @endforeach
        </select>

        <label for="veterinario">Veterinario:</label>
        <select name="veterinario" id="veterinario">
            @foreach($veterinarios as $v)   
                <option value="{{$v->id}}">{{$v->nome}}</option>
            @endforeach
        </select>

        <button type="submit">Enviar</button>
    </form>

<h4><a href="{{route('tratamentos.create')}}">Iniciar um Tratamento</a></h4>
@endsection