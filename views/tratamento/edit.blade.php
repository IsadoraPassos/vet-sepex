@extends('layouts.main')

@section('title')
    Editar Tratamento
@endsection

@section('content')
<h1>Editar Tratamento</h1>
<h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

<form action="{{route('tratamentos.update', $tratamento->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="{{$tratamento->descricao}}">

        <label for="animal">Animal:</label>
        <select name="animal" id="animal" disabled>
            @foreach($animais as $a)   
                <option value="{{$a->id}}" {{($tratamento->animal_id == "$a->id")? 'selected' : ''}}>
                    {{$a->nome}}</option>
            @endforeach
        </select>

        <button type="submit">Editar</button>
    </form>
@endsection