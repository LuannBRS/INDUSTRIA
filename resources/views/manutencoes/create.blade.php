@extends('layouts.app')

@section('title', 'Cadastro de manutenção')

@section('content')

<h1>Cadastrar Manutenção</h1>

<form action="{{ route('manutencoes.store') }}"
      method="post"
      class="container mt-4">

    @csrf

    <div>
        <label class="form-label">Equipamento</label>
        <input type="number"
               name="equipamento_id"
               id="equipamento_id"
               class="form-control">
    </div>

    <div>
        <label class="form-label">Funcionário</label>
        <input type="number"
               name="funcionario_id"
               id="funcionario_id"
               class="form-control">
    </div>

    <div>
        <label class="form-label">Tipo</label>
        <input type="text"
               name="tipo"
               id="tipo"
               class="form-control">
    </div>

    <div>
        <label class="form-label">Descrição</label>
        <textarea name="descricao"
                  id="descricao"
                  class="form-control"></textarea>
    </div>

    <div>
        <label class="form-label">Data da manutenção</label>
        <input type="date"
               name="data_manutencao"
               id="data_manutencao"
               class="form-control">
    </div>

    <div>
        <label class="form-label">Próxima manutenção</label>
        <input type="date"
               name="proxima_manutencao"
               id="proxima_manutencao"
               class="form-control">
    </div>

    <div>
        <label class="form-label">Custo</label>
        <input type="number"
               step="0.01"
               name="custo"
               id="custo"
               class="form-control">
    </div>

    <div>
        <label class="form-label">Status</label>
        <input type="text"
               name="status"
               id="status"
               class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Agora vai ter mais coisa
    </button>

</form>

@endsection