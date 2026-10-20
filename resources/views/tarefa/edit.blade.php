@extends('layouts.app')
@section('title', 'Editar tarefa')
@section('content')
<h1>Editar alguma tarefa ae</h1>
<form action="{{ route('tarefa.update', $tarefa->id ) }}" method="post" class="container mt-4" style="max-width: 600px;">
    @csrf
    @method('PUT')
    <div>
        <label for="" class="form-label">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$tarefa->descricao}}">

        <label for="" class="form-label">Nome do Setor</label>
        <input type="text" name="nome_setor" id="nome_setor" class="form-control" value="{{$tarefa->nome_setor}}">

        <label for="" class="form-label">Prioridade</label>
        <input type="text" name="prioridade" id="prioridade" class="form-control" value="{{$tarefa->prioridade}}">

        <label for="" class="form-label">Status</label>
        <input type="text" name="status" id="status" class="form-control" value="{{$tarefa->status}}">

        <label for="" class="form-label">Data</label>
        <input type="date" name="data" id="data" class="form-control" value="{{$tarefa->data}}">

        <label for="usuario_id" class="form-label">Usuário</label>

        <select name="usuario_id" id="usuario_id" class="form-control" value="{{$tarefa->usuario_id}}">
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