@extends('layouts.app')
@section('title', 'Cadastro de Usuarios tropinha')
@section('content')
<h1>Cadastrar Cabloco</h1>
<form action="{{ route('usuarios.store') }}" method="post" class="container mt-4">
    @csrf
    <div>
        <label for="" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">

        <label for="" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-sucess">Salva essa prova merma</button>
</form>
@endsection