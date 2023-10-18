@extends('layouts.main')

@section('title')
    Animais
@endsection

@section('content')
<h1>Animais</h1>
<h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Sexo</th>
        <th>Dono</th>
        <th>Especie</th>
    </thead>
    <tbody>
        @foreach($animais as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->idade}}</td>
            <td>{{$a->sexo}}</td>
            <td>{{$a->cliente->nome}}</td>
            <td>{{$a->especie->nome}}</td>
            <td class="actions"><a href="{{route('animais.show', $a->id)}}">Visualizar</a></td>
            <td class="actions"><a href="{{route('animais.edit', $a->id)}}">Editar</a></td>
            <td>
                <form action="{{ route('animais.destroy', $a->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="actions">Excluir</button>
                </form>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
@endsection