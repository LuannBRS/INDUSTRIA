@extends('layouts.app')

@section('title', 'Editar manutenção')

@section('content')

<h1>Editar Manutenção</h1>

<form action="{{ route('manutencoes.update', ['manutencao' => $manutencao->id]) }}"
      method="post"
      class="container mt-4">

    @csrf
    @method('PUT')

    <div>
        <label class="form-label">Equipamento</label>
        <input type="number"
               name="equipamento_id"
               id="equipamento_id"
               class="form-control"
               value="{{ $manutencao->equipamento_id }}">
    </div>

    <div>
        <label class="form-label">Funcionário</label>
        <input type="number"
               name="funcionario_id"
               id="funcionario_id"
               class="form-control"
               value="{{ $manutencao->funcionario_id }}">
    </div>

    <div>
        <label class="form-label">Tipo</label>
        <input type="text"
               name="tipo"
               id="tipo"
               class="form-control"
               value="{{ $manutencao->tipo }}">
    </div>

    <div>
        <label class="form-label">Descrição</label>
        <textarea name="descricao"
                  id="descricao"
                  class="form-control">{{ $manutencao->descricao }}</textarea>
    </div>

    <div>
        <label class="form-label">Data da manutenção</label>
        <input type="date"
               name="data_manutencao"
               id="data_manutencao"
               class="form-control"
               value="{{ $manutencao->data_manutencao }}">
    </div>

    <div>
        <label class="form-label">Próxima manutenção</label>
        <input type="date"
               name="proxima_manutencao"
               id="proxima_manutencao"
               class="form-control"
               value="{{ $manutencao->proxima_manutencao }}">
    </div>

    <div>
        <label class="form-label">Custo</label>
        <input type="number"
               step="0.01"
               name="custo"
               id="custo"
               class="form-control"
               value="{{ $manutencao->custo }}">
    </div>

    <div>
        <label class="form-label">Status</label>
        <input type="text"
               name="status"
               id="status"
               class="form-control"
               value="{{ $manutencao->status }}">
    </div>

    <button type="submit" class="btn btn-success">
        MUDOU! MUDOU!
    </button>

</form>

@endsection