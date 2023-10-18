@extends('layouts.main')

@section('title')
    Cadastrar Animal
@endsection

@section('content')
    <h1>Cadastrar Animal</h1>
    <h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

    <form action="{{route('animais.store')}}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">

        <label for="sexo">Sexo:</label>
        <input type="checkbox" name="sexo" value="m">
        <label for="sexo">Macho</label>
        <input type="checkbox" name="sexo" value="f">
        <label for="sexo">Fêmea</label>

        <label for="dono">Dono:</label>
        <select name="dono" id="dono">
            @foreach($clientes as $c)   
                <option value="{{$c->id}}">{{$c->nome}}</option>
            @endforeach
        </select>

        <label for="especie">Especie:</label>
        <select name="especie" id="especie">
            @foreach($especies as $e)   
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>

        <button type="submit">Enviar</button>
    </form>
@endsection