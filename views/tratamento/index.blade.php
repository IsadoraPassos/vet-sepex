@extends('layouts.main')

@section('title')
    Tratamentos
@endsection

@section('content')
<h1>Tratamentos</h1>
<h4><a href="{{route('home')}}">Voltar ao menu</a></h4>

<table>
    <thead>
        <th>Descrição</th>
        <th>Animal</th>
    </thead>
    <tbody>
        @foreach($tratamentos as $t)
        <tr>
            <td>{{$t->descricao}}</td>
            <td>{{$t->animal->nome}}</td>
            <!-- <td class="actions"><a href="{{route('tratamentos.show', $t->id)}}">Visualizar</a></td> -->
            <td class="actions"><a href="{{route('tratamentos.edit', $t->id)}}">Editar</a></td>
            <td>
                <form action="{{ route('tratamentos.destroy', $t->id) }}" method="POST">
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