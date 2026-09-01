@extends('layouts.app')

@section('title', 'title de manutencoes')

@section('content')

<h1>Lista de Manutenções para {{ Auth::user()->name }}</h1>

<a class="btn btn-primary"
   href="{{ route('manutencoes.create') }}"
   role="button">
    Outro negocio a mais
</a>

<table class="table">

    <thead class="table-dark">
        <th>ID</th>
        <th>Equipamento</th>
        <th>Funcionário</th>
        <th>Tipo</th>
        <th>Descrição</th>
        <th>Data Manutenção</th>
        <th>Próxima Manutenção</th>
        <th>Custo</th>
        <th>Status</th>
        <th>Opções</th>
    </thead>

    <tbody>

        @foreach($manutencoes as $manutencao)

        <tr class="table-dark">

            <td>{{ $manutencao->id }}</td>
            <td>{{ $manutencao->equipamento_id }}</td>
            <td>{{ $manutencao->funcionario_id }}</td>
            <td>{{ $manutencao->tipo }}</td>
            <td>{{ $manutencao->descricao }}</td>
            <td>{{ $manutencao->data_manutencao }}</td>
            <td>{{ $manutencao->proxima_manutencao }}</td>
            <td>{{ $manutencao->custo }}</td>
            <td>{{ $manutencao->status }}</td>

            <td>

                <a class="btn btn-primary"
                   href="{{ route('manutencoes.show', ['manutencao' => $manutencao->id]) }}"
                   role="button">
                    Ver
                </a>

                <a class="btn btn-primary"
                   href="{{ route('manutencoes.edit', ['manutencao' => $manutencao->id]) }}"
                   role="button">
                    Editar
                </a>

                <form action="{{ route('manutencoes.destroy', ['manutencao' => $manutencao->id]) }}"
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