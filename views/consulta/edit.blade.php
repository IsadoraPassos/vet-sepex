@extends('layouts.main')

@section('title')
    Editar Consulta
@endsection

@section('content')
    <h1>Editar Consulta</h1>
    <h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

    <form action="{{route('consultas.update', $consulta->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="resumo">Resumo:</label>
        <input type="text" id="resumo" name="resumo" value="{{$consulta->resumo}}">

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" value="{{$consulta->data}}">

        <label for="veterinario">Veterinario:</label>
        <select name="veterinario" id="veterinario">
            @foreach($veterinarios as $v)   
                <option value="{{$v->id}}" {{($consulta->veterinario_id == $v->id)? 'selected' : ''}}>{{$v->nome}}</option>
            @endforeach
        </select>

        <button type="submit">Enviar</button>
    </form>
@endsection