@extends('layouts.main')

@section('title')
    Cadastrar Tratamento
@endsection

@section('content')
    <h1>Cadastrar Tratamento</h1>
    <h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

    <form action="{{route('tratamentos.store')}}" method="POST">
        @csrf
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao">

        <label for="animal">Animal:</label>
        <select name="animal" id="animal">
            @foreach($animais as $a)   
                <option value="{{$a->id}}">{{$a->nome}}</option>
            @endforeach
        </select>

        <button type="submit">Enviar</button>
    </form>

<h4><a href="{{route('consultas.create')}}">Marcar Consulta</a></h4>
@endsection