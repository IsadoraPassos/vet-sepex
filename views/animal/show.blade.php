@extends('layouts.main')

@section('title')
    Animais
@endsection

@section('content')
<h1>Animais</h1>
<h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

<p><strong>Nome:</strong> {{ $animal->nome }}</p>
<p><strong>Idade:</strong> {{ $animal->idade }}</p>
<p><strong>Sexo:</strong> {{ $animal->sexo }}</p>
<p><strong>Dono:</strong> {{ $animal->cliente->nome }}</p>
<p><strong>Especie:</strong> {{ $animal->especie->nome }}</p>

<p><a href="{{route('animais.edit', $animal->id)}}">Editar</a></p>
@endsection