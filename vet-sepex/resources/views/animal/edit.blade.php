@extends('layouts.main')

@section('title')
    Editar Animais
@endsection

@section('content')
<h1>Editar Animais</h1>
<h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

<form action="{{route('animais.update', $animal->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{$animal->nome}}">

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" value="{{$animal->idade}}">

        <!-- <label for="sexo">Sexo:</label>
        <input type="checkbox" name="sexo" value="m"
        {{ ($animal->sexo == 'm') ? 'checked' : '' }}
        >
        <label for="sexo">Macho</label>
        <input type="checkbox" name="sexo" value="f"
        {{ ($animal->sexo == 'f') ? 'checked' : '' }}
        >
        <label for="sexo">Fêmea</label> -->

        <label for="dono">Dono:</label>
        <select name="dono" id="dono">
            @foreach($clientes as $c)   
                <option value="{{$c->id}}" {{($animal->cliente_id == "$c->id")? 'selected' : ''}}>
                    {{$c->nome}}</option>
            @endforeach
        </select>

        <button type="submit">Editar</button>
    </form>
@endsection