@extends('layouts.app')

@section('title', 'Lista de Chamados')

@section('content')

<h1>Lista de Chamados para {{ Auth::user()->name }}</h1>

<a class="btn btn-primary" href="{{ route('chamados.create') }}" role="button">
    Cria um ae pai
</a>

<table class="table">

    <thead class="table-dark">
        <th>ID</th>
        <th>Título</th>
        <th>Status</th>
        <th>Equipamento</th>
        <th>Opções</th>
    </thead>

    <tbody>

        @foreach($chamados as $chamado)

        <tr class="table-dark">

            <td>{{ $chamado->id }}</td>

            <td>{{ $chamado->titulo }}</td>

            <td>{{ $chamado->status }}</td>

            <td>{{ $chamado->equipamento_id }}</td>

            <td>

                <a class="btn btn-primary"
                   href="{{ route('chamados.show', $chamado->id) }}"
                   role="button">
                    Ver
                </a>

                <a class="btn btn-primary"
                   href="{{ route('chamados.edit', $chamado->id) }}"
                   role="button">
                    Editar
                </a>

                <form action="{{ route('chamados.destroy', $chamado->id) }}"
                      method="post">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Joga fora fi
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection