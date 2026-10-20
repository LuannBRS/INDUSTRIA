@extends('layouts.app')

@section('title', 'Cadastro de tarefa')

@section('content')

<h1>Tarefas</h1>

<div class="container">
    <div class="row align-items-start">

        {{-- A FAZER --}}
        <div class="col">
            <h2>A Fazer</h2>

            @foreach($tarefasAFazer as $tarefa)

                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">

                        <h5 class="card-title">
                            Descrição: {{ $tarefa->descricao }}
                        </h5>

                        <h5 class="card-title">
                            Setor: {{ $tarefa->nome_setor }}
                        </h5>

                        <h5 class="card-title">
                            Prioridade: {{ $tarefa->prioridade }}
                        </h5>

                        <h5 class="card-title">
                            Vinculado a:
                            {{ $tarefa->usuario?->nome ?? 'Usuário não encontrado' }}
                        </h5>

                        <div class="col">

                            <a href="{{ route('tarefa.edit', $tarefa->id) }}"
                               class="btn btn-success">
                                Editar
                            </a>

                            <form action="{{ route('tarefa.destroy', $tarefa->id) }}"
                                  method="post"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>

                            </form>

                        </div>

                        <div class="mb-3 mt-3">

                            <form action="{{ route('tarefa.alterarstatus', $tarefa->id) }}"
                                  method="post">

                                @csrf
                                @method('PUT')

                                <label class="form-label">
                                    Alterar Status
                                </label>

                                <select name="status"
                                        class="form-select">

                                    <option value="A Fazer"
                                        @selected($tarefa->status == 'A Fazer')>
                                        A Fazer
                                    </option>

                                    <option value="Fazendo"
                                        @selected($tarefa->status == 'Fazendo')>
                                        Fazendo
                                    </option>

                                    <option value="Pronto"
                                        @selected($tarefa->status == 'Pronto')>
                                        Pronto
                                    </option>

                                </select>

                                <button type="submit"
                                        class="btn btn-primary mt-2">
                                    Alterar Status
                                </button>

                            </form>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>


        {{-- FAZENDO --}}
        <div class="col">
            <h2>Fazendo</h2>

            @foreach($tarefasFazendo as $tarefa)

                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">

                        <h5 class="card-title">
                            Descrição: {{ $tarefa->descricao }}
                        </h5>

                        <h5 class="card-title">
                            Setor: {{ $tarefa->nome_setor }}
                        </h5>

                        <h5 class="card-title">
                            Prioridade: {{ $tarefa->prioridade }}
                        </h5>

                        <h5 class="card-title">
                            Vinculado a:
                            {{ $tarefa->usuario?->nome ?? 'Usuário não encontrado' }}
                        </h5>

                        <div class="col">

                            <a href="{{ route('tarefa.edit', $tarefa->id) }}"
                               class="btn btn-success">
                                Editar
                            </a>

                            <form action="{{ route('tarefa.destroy', $tarefa->id) }}"
                                  method="post"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>

                            </form>

                        </div>

                        <div class="mb-3 mt-3">

                            <form action="{{ route('tarefa.alterarstatus', $tarefa->id) }}"
                                  method="post">

                                @csrf
                                @method('PUT')

                                <label class="form-label">
                                    Alterar Status
                                </label>

                                <select name="status"
                                        class="form-select">

                                    <option value="A Fazer"
                                        @selected($tarefa->status == 'A Fazer')>
                                        A Fazer
                                    </option>

                                    <option value="Fazendo"
                                        @selected($tarefa->status == 'Fazendo')>
                                        Fazendo
                                    </option>

                                    <option value="Pronto"
                                        @selected($tarefa->status == 'Pronto')>
                                        Pronto
                                    </option>

                                </select>

                                <button type="submit"
                                        class="btn btn-primary mt-2">
                                    Alterar Status
                                </button>

                            </form>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>


        {{-- PRONTO --}}
        <div class="col">
            <h2>Pronto</h2>

            @foreach($tarefasPronto as $tarefa)

                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">

                        <h5 class="card-title">
                            Descrição: {{ $tarefa->descricao }}
                        </h5>

                        <h5 class="card-title">
                            Setor: {{ $tarefa->nome_setor }}
                        </h5>

                        <h5 class="card-title">
                            Prioridade: {{ $tarefa->prioridade }}
                        </h5>

                        <h5 class="card-title">
                            Vinculado a:
                            {{ $tarefa->usuario?->nome ?? 'Usuário não encontrado' }}
                        </h5>

                        <div class="col">

                            <a href="{{ route('tarefa.edit', $tarefa->id) }}"
                               class="btn btn-success">
                                Editar
                            </a>

                            <form action="{{ route('tarefa.destroy', $tarefa->id) }}"
                                  method="post"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>

                            </form>

                        </div>

                        <div class="mb-3 mt-3">

                            <form action="{{ route('tarefa.alterarstatus', $tarefa->id) }}"
                                  method="post">

                                @csrf
                                @method('PUT')

                                <label class="form-label">
                                    Alterar Status
                                </label>

                                <select name="status"
                                        class="form-select">

                                    <option value="A Fazer"
                                        @selected($tarefa->status == 'A Fazer')>
                                        A Fazer
                                    </option>

                                    <option value="Fazendo"
                                        @selected($tarefa->status == 'Fazendo')>
                                        Fazendo
                                    </option>

                                    <option value="Pronto"
                                        @selected($tarefa->status == 'Pronto')>
                                        Pronto
                                    </option>

                                </select>

                                <button type="submit"
                                        class="btn btn-primary mt-2">
                                    Alterar Status
                                </button>

                            </form>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>

    </div>
</div>

@endsection