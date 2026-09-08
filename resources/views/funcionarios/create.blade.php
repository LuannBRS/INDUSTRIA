@extends('layouts.app')

@section('title', 'Cadastro de funcionário')

@section('content')

<h1>Cadastrar Funcionário</h1>

<form action="{{ route('funcionarios.store') }}" method="post" class="container mt-4">
    @csrf
    <div>
        <label for="" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">

        <label for="" class="form-label">Matricula</label>
        <input type="text" name="matricula" id="matricula" class="form-control">

        <label for="" class="form-label">Cargo</label>
        <input type="text" name="cargo" id="cargo" class="form-control">
    </div>
    <button type="submit" class="btn btn-sucess">Salvar</button>
</form>
@endsection