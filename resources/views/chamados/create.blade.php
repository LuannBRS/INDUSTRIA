@extends('layouts.app')

@section('title', 'Cadastro de chamado')

@section('content')

<h1>Cadastrar Chamado</h1>

<form action="{{ route('chamados.store') }}" method="POST" class="container mt-4">

    @csrf

    <div>
        <label for="titulo" class="form-label">Título</label>

        <input
            type="text"
            name="titulo"
            id="titulo"
            class="form-control"
            value="{{ old('titulo') }}"
        >

        @error('titulo')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mt-3">

        <label for="equipamento_id" class="form-label">
            ID do Equipamento
        </label>

        <input
            type="number"
            name="equipamento_id"
            id="equipamento_id"
            class="form-control"
            value="{{ old('equipamento_id') }}"
        >

        @error('equipamento_id')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>


    <button type="submit" class="btn btn-success mt-3">
        Salvar
    </button>

</form>

@endsection