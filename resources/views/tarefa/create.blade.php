@extends('layouts.app')
@section('title', 'Cadastro de Tarefa tropinha')
@section('content')
<h1>Cadastrar coisa q da trabai</h1>
<form action="{{ route('tarefa.store') }}" method="post" class="container mt-4" style="max-width: 600px;">
    @csrf
    <div>
        <label for="" class="form-label">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control">

        <label for="" class="form-label">Nome do Setor</label>
        <input type="text" name="nome_setor" id="nome_setor" class="form-control">

        <label for="" class="form-label">Prioridade</label>
        <input type="text" name="prioridade" id="prioridade" class="form-control">

        <label for="" class="form-label">Status</label>
        <input type="text" name="status" id="status" class="form-control">

        <label for="" class="form-label">Data</label>
        <input type="date" name="data" id="data" class="form-control">

        <label for="usuario_id" class="form-label">Usuário</label>

        <select name="usuario_id" id="usuario_id" class="form-control">
            <option value="">Selecione um usuário</option>

        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}">
                {{ $usuario->nome }}
            </option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary btn-sm">Salva essa prova merma</button>
    </div>
</form>
@endsection