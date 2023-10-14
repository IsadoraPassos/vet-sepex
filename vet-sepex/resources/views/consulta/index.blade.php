@extends('layouts.main')

@section('title')
    Consultas
@endsection

@section('content')
<h1>Consultas</h1>
<h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

<table>
    <thead>
        <th>Resumo</th>
        <th>Data</th>
        <th>Tratamento</th>
        <th>Veterinario</th>
    </thead>
    <tbody>
        @foreach($consultas as $c)
        <tr>
            <td>{{$c->resumo}}</td>
            <td>{{$c->data}}</td>
            <td>{{$c->tratamento->descricao}}</td>
            <td>{{$c->veterinario->nome}}</td>
            <td class="actions"><a href="{{route('consultas.edit', $c->id)}}">Editar</a></td>
            <td>
                <form action="{{ route('consultas.destroy', $c->id) }}" method="POST">
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