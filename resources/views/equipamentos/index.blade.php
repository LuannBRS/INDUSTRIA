@extends('layouts.app')

@section('title', 'Lista de equipamentos')

@section('content')

<h1>Lista de Equipamentos</h1>

<a class="btn btn-primary" href="{{ route('equipamentos.create') }}" role="button">
    Faz outro
</a>

<table class="table">

    <thead class="table-dark">
        <th>ID</th>
        <th>Nome</th>
        <th>Patrimônio</th>
        <th>Setor</th>
        <th>Status</th>
        <th>Opções</th>
    </thead>

    <tbody>

        @foreach($equipamentos as $equipamento)

        <tr class="table-dark">

            <td>{{ $equipamento->id }}</td>

            <td>{{ $equipamento->nome }}</td>

            <td>{{ $equipamento->patrimonio }}</td>

            <td>{{ $equipamento->setor_id }}</td>

            <td>{{ $equipamento->status }}</td>

            <td>

                <a
                    class="btn btn-primary"
                    href="{{ route('equipamentos.show', $equipamento->id) }}"
                    role="button"
                >
                    Ver
                </a>

                <a
                    class="btn btn-primary"
                    href="{{ route('equipamentos.edit', $equipamento->id) }}"
                    role="button"
                >
                    Editar
                </a>

                <form
                    action="{{ route('equipamentos.destroy', $equipamento->id) }}"
                    method="post"
                    style="display:inline"
                >

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
