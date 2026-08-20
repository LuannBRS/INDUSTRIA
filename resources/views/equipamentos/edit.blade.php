@extends('layouts.app')

@section('title', 'Editar equipamento')

@section('content')

<h1>Editar Equipamento</h1>

<form action="{{ route('equipamentos.update', $equipamento->id) }}" method="post" class="container mt-4">
    @csrf
    @method('PUT')
    <div>

        <label for="" class="form-label">
            Nome
        </label>

        <input type="text" name="nome" id="nome" class="form-control" value="{{ $equipamento->nome }}">

    </div>

    <div>

        <label for="" class="form-label">
            Patrimônio
        </label>

        <input type="text" name="patrimonio" id="patrimonio" class="form-control" value="{{ $equipamento->patrimonio }}">

    </div>

    <div>

        <label for="" class="form-label">
            Setor
        </label>

        <select name="setor_id" id="setor_id" class="form-control">

            @foreach($setores as $setor)

                <option value="{{ $setor->id }}" {{ $equipamento->setor_id == $setor->id ? 'selected' : '' }} >
                    {{ $setor->nome }}
                </option>

            @endforeach

        </select>

    </div>

    <div>

        <label for="" class="form-label">
            Status
        </label>

        <select name="status" id="status" class="form-control">

            <option value="ativo" {{ $equipamento->status == 'ativo' ? 'selected' : '' }}>
                Ativo
            </option>

            <option value="inativo" {{ $equipamento->status == 'inativo' ? 'selected' : '' }}>
                Inativo
            </option>

            <option value="manutenção" {{ $equipamento->status == 'manutenção' ? 'selected' : '' }}>
                Manutenção
            </option>

        </select>

    </div>

    <button type="submit" class="btn btn-success">
        Salvar
    </button>

</form>

@endsection
