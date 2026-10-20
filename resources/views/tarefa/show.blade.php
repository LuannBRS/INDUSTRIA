@extends('layouts.app')
@section('title', 'Visualizar tarefas')
@section('content')
<h1>Ve as tarefas</h1>


<p>ID: {{$tarefa->id}}</p>
<p>Descrição: {{$tarefa->descricao}}</p>
<p>Nome do Setor: {{$tarefa->nome_setor}}</p>
<p>Prioridade: {{$tarefa->prioridade}}</p>
<p>Nome do Setor: {{$tarefa->nome_setor}}</p>
<p>Prioridade: {{$tarefa->prioridade}}</p>
<p>Data: {{$tarefa->data}}</p>
<p>Usuario: {{$tarefa->usuario_id}}</p>
@endsection