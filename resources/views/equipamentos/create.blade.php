@extends('layouts.app')
@section('title', 'Cadastro de equipamento')
@section('content')
<h1>Cadastrar Equipamento</h1>
<form action="{{ route('equipamentos.store') }}" method="post" class="container mt-4">
    @csrf
    <div>
        <label for="" class="form-label">
            Nome
        </label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div>
        <label for="" class="form-label">
            Patrimônio
        </label>

        <input type="text" name="patrimonio" id="patrimonio" class="form-control">
    </div>

    <div>
        <label for="" class="form-label">
            Setor
        </label>

        <select name="setor_id" id="setor_id" class="form-control">

            @foreach($setores as $setor)

                <option value="{{ $setor->id }}"> {{ $setor->nome }} </option>

            @endforeach

        </select>
    </div>

    <div>
        <label for="" class="form-label">
            Status
        </label>

        <select name="status" id="status" class="form-control">

            <option value="ativo">
                Ativo
            </option>

            <option value="inativo">
                Inativo
            </option>

            <option value="manutenção">
                Manutenção
            </option>

        </select>
    </div>

    <button type="submit" class="btn btn-success">Manda ai chefe</button>

</form>

@endsection
