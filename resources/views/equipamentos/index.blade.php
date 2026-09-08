@extends('layouts.app')

@section('title', 'Lista de equipamentos')

@section('content')

<h1>Lista de Equipamentos</h1>

<a class="btn btn-primary" href="{{ route('equipamentos.create') }}" role="button">
    Faz outro
</a>

<br><br>

<form method="GET" action="{{ route('equipamentos.index') }}">

    <input type="text"
           name="nome"
           placeholder="Nome"
           value="{{ request('nome') }}">

    <select name="status">
        <option value="">Todos os status</option>

        <option value="ativo"
            {{ request('status') == 'ativo' ? 'selected' : '' }}>
            Ativo
        </option>

        <option value="manutencao"
            {{ request('status') == 'manutencao' ? 'selected' : '' }}>
            Manutenção
        </option>

        <option value="inativo"
            {{ request('status') == 'inativo' ? 'selected' : '' }}>
            Inativo
        </option>
    </select>

    <select name="setor_id">
        <option value="">Todos os setores</option>

        @foreach($setores as $setor)
            <option value="{{ $setor->id }}"
                {{ request('setor_id') == $setor->id ? 'selected' : '' }}>
                {{ $setor->nome }}
            </option>
        @endforeach
    </select>

    <input type="text"
           name="patrimonio"
           placeholder="Patrimônio"
           value="{{ request('patrimonio') }}">

    <button type="submit" class="btn btn-primary">
        Filtrar
    </button>

</form>

<br>

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