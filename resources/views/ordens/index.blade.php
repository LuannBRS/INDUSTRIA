@extends ('layouts.app')
@section('title', 'title de ordens')
@section('content')

<h1>Lista de Ordens para {{Auth::user()->name }}</h1>

<a class="btn btn-primary"
   href="{{ route('ordens.create') }}"
   role="button">
    Outro negocio
</a>

<table class="table">

    <thead class="table-dark">
        <th>ID</th>
        <th>Setor</th>
        <th>Responsável</th>
        <th>Código</th>
        <th>Produto</th>
        <th>Qtd. Planejada</th>
        <th>Qtd. Produzida</th>
        <th>Data Início</th>
        <th>Data Fim</th>
        <th>Status</th>
        <th>Observações</th>
        <th>Opções</th>
    </thead>

    <tbody>

        @foreach($ordens as $ordem)

        <tr class="table-dark">

            <td>{{ $ordem->id }}</td>
            <td>{{ $ordem->setor_id }}</td>
            <td>{{ $ordem->responsavel_id }}</td>
            <td>{{ $ordem->codigo_ordem }}</td>
            <td>{{ $ordem->produto }}</td>
            <td>{{ $ordem->quantidade_planejada }}</td>
            <td>{{ $ordem->quantidade_produzida }}</td>
            <td>{{ $ordem->data_inicio }}</td>
            <td>{{ $ordem->data_fim }}</td>
            <td>{{ $ordem->status }}</td>
            <td>{{ $ordem->observacoes }}</td>

            <td>

                <a class="btn btn-primary"
                   href="{{ route('ordens.show', ['ordem' => $ordem->id]) }}"
                   role="button">
                    Ver
                </a>

                <a class="btn btn-primary"
                   href="{{ route('ordens.edit', ['ordem' => $ordem->id]) }}"
                   role="button">
                    Editar
                </a>

                <form action="{{ route('ordens.destroy', ['ordem' => $ordem->id]) }}"
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