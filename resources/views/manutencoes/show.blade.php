@extends('layouts.app')

@section('title', 'Visualizar manutenção')

@section('content')

<h1>Ver a manutenção XD</h1>

<p>ID: {{ $manutencao->id }}</p>
<p>Equipamento: {{ $manutencao->equipamento_id }}</p>
<p>Funcionário: {{ $manutencao->funcionario_id }}</p>
<p>Tipo: {{ $manutencao->tipo }}</p>
<p>Descrição: {{ $manutencao->descricao }}</p>
<p>Data da manutenção: {{ $manutencao->data_manutencao }}</p>
<p>Próxima manutenção: {{ $manutencao->proxima_manutencao }}</p>
<p>Custo: {{ $manutencao->custo }}</p>
<p>Status: {{ $manutencao->status }}</p>

@endsection