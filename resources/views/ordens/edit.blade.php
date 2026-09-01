@extends('layouts.app')
@section('title', 'Editar ordem')
@section('content')

<h1>Editar Ordem de Produção</h1>

<form action="{{ route('ordens.update', ['ordem' => $ordem->id]) }}"
      method="post"
      class="container mt-4">

    @csrf
    @method('PUT')

    <div>
        <label for="" class="form-label">Setor</label>
        <input type="number"
               name="setor_id"
               id="setor_id"
               class="form-control"
               value="{{$ordem->setor_id}}">
    </div>

    <div>
        <label for="" class="form-label">Responsável</label>
        <input type="number"
               name="responsavel_id"
               id="responsavel_id"
               class="form-control"
               value="{{$ordem->responsavel_id}}">
    </div>

    <div>
        <label for="" class="form-label">Código da Ordem</label>
        <input type="text"
               name="codigo_ordem"
               id="codigo_ordem"
               class="form-control"
               value="{{$ordem->codigo_ordem}}">
    </div>

    <div>
        <label for="" class="form-label">Produto</label>
        <input type="text"
               name="produto"
               id="produto"
               class="form-control"
               value="{{$ordem->produto}}">
    </div>

    <div>
        <label for="" class="form-label">Quantidade Planejada</label>
        <input type="number"
               name="quantidade_planejada"
               id="quantidade_planejada"
               class="form-control"
               value="{{$ordem->quantidade_planejada}}">
    </div>

    <div>
        <label for="" class="form-label">Quantidade Produzida</label>
        <input type="number"
               name="quantidade_produzida"
               id="quantidade_produzida"
               class="form-control"
               value="{{$ordem->quantidade_produzida}}">
    </div>

    <div>
        <label for="" class="form-label">Data de Início</label>
        <input type="datetime-local"
               name="data_inicio"
               id="data_inicio"
               class="form-control"
               value="{{ $ordem->data_inicio ? date('Y-m-d\TH:i', strtotime($ordem->data_inicio)) : '' }}">
    </div>

    <div>
        <label for="" class="form-label">Data de Fim</label>
        <input type="datetime-local"
               name="data_fim"
               id="data_fim"
               class="form-control"
               value="{{ $ordem->data_fim ? date('Y-m-d\TH:i', strtotime($ordem->data_fim)) : '' }}">
    </div>

    <div>
        <label for="" class="form-label">Status</label>
        <input type="text"
               name="status"
               id="status"
               class="form-control"
               value="{{$ordem->status}}">
    </div>

    <div>
        <label for="" class="form-label">Observações</label>
        <textarea name="observacoes"
                  id="observacoes"
                  class="form-control">{{$ordem->observacoes}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">
        Para de mudar
    </button>

</form>

@endsection