@extends('layouts.app')
@section('title', 'Cadastro de ordem')
@section('content')

<h1>Cadastrar Ordem de Produção</h1>

<form action="{{ route('ordens.store') }}" method="post" class="container mt-4">

    @csrf

    <div>
        <label for="" class="form-label">Setor</label>
        <input type="number"
               name="setor_id"
               id="setor_id"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Responsável</label>
        <input type="number"
               name="responsavel_id"
               id="responsavel_id"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Código da Ordem</label>
        <input type="text"
               name="codigo_ordem"
               id="codigo_ordem"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Produto</label>
        <input type="text"
               name="produto"
               id="produto"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Quantidade Planejada</label>
        <input type="number"
               name="quantidade_planejada"
               id="quantidade_planejada"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Quantidade Produzida</label>
        <input type="number"
               name="quantidade_produzida"
               id="quantidade_produzida"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Data de Início</label>
        <input type="datetime-local"
               name="data_inicio"
               id="data_inicio"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Data de Fim</label>
        <input type="datetime-local"
               name="data_fim"
               id="data_fim"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Status</label>
        <input type="text"
               name="status"
               id="status"
               class="form-control">
    </div>

    <div>
        <label for="" class="form-label">Observações</label>
        <textarea name="observacoes"
                  id="observacoes"
                  class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">
        Salva ai cria
    </button>

</form>

@endsection