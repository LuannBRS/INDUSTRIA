
@extends('layouts.app')
@section('title', 'Visualizar ordem')
@section('content')

<h1>Ver a Ordem de Produção</h1>

<p>ID: {{$ordem->id}}</p>
<p>Setor: {{$ordem->setor_id}}</p>
<p>Responsável: {{$ordem->responsavel_id}}</p>
<p>Código da Ordem: {{$ordem->codigo_ordem}}</p>
<p>Produto: {{$ordem->produto}}</p>
<p>Quantidade Planejada: {{$ordem->quantidade_planejada}}</p>
<p>Quantidade Produzida: {{$ordem->quantidade_produzida}}</p>
<p>Data de Início: {{$ordem->data_inicio}}</p>
<p>Data de Fim: {{$ordem->data_fim}}</p>
<p>Status: {{$ordem->status}}</p>
<p>Observações: {{$ordem->observacoes}}</p>
@endsection