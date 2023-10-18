@extends('layouts.main')

@section('title')
    Menu
@endsection

@section('content')
    <h1>Menu</h1>

    <a href="{{route('animais.create')}}">Registrar Animal</a>
    <br>
    <a href="{{route('animais.index')}}">Listar Animais</a>
    <br><br>
    <a href="{{route('tratamentos.create')}}">Iniciar um Tratamento</a>
    <br>
    <a href="{{route('tratamentos.index')}}">Ver Tratamento</a>
    <br><br>
    <a href="{{route('consultas.create')}}">Marcar Consulta</a>
    <br>
    <a href="{{route('consultas.index')}}">Listar Consulta</a>

@endsection
