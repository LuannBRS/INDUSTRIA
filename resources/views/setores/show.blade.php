@extends('layouts.app')
@section('title', 'Visualizar setor')
@section('content')
<h1>Ve os setor</h1>


<p>ID: {{$setor->id}}</p>
<p>Nome: {{$setor->nome}}</p>
@endsection