@extends('layouts.app')

@section('title', 'Lista de Funcionários')

@section('content')

<h1>Lista de Funcionários</h1>

<a class="btn btn-primary"
   href="{{ route('funcionarios.create') }}"
   role="button">
    Cadastrar Funcionário
</a>

<br><br>

<form method="GET" action="{{ route('funcionarios.index') }}">

    <input type="text"
           name="nome"
           placeholder="Nome"
           value="{{ request('nome') }}">

    <input type="text"
           name="cargo"
           placeholder="Cargo"
           value="{{ request('cargo') }}">

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
           name="matricula"
           placeholder="Matrícula"
           value="{{ request('matricula') }}">

    <button type="submit" class="btn btn-primary">
        Filtrar
    </button>

</form>

<br>

<table class="table">

    <thead class="table-dark">
        <th>ID</th>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>Cargo</th>
        <th>Setor</th>
        <th>Ações</th>
    </thead>

    <tbody>

        @foreach($funcionarios as $funcionario)

        <tr class="table-dark">

            <td>{{ $funcionario->id }}</td>

            <td>{{ $funcionario->nome }}</td>

            <td>{{ $funcionario->matricula }}</td>

            <td>{{ $funcionario->cargo }}</td>

            <td>{{ $funcionario->setor->nome ?? 'Sem setor' }}</td>

            <td>

                <a class="btn btn-primary"
                   href="{{ route('funcionarios.show', $funcionario->id) }}"
                   role="button">
                    Ver
                </a>

                <a class="btn btn-primary"
                   href="{{ route('funcionarios.edit', $funcionario->id) }}"
                   role="button">
                    Editar
                </a>

                <form action="{{ route('funcionarios.destroy', $funcionario->id) }}"
                      method="post"
                      style="display:inline;">

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