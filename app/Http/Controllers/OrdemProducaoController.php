<?php

namespace App\Http\Controllers;

use App\Models\OrdemProducao;
use App\Models\Setor;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class OrdemProducaoController extends Controller
{
    public function index()
    {
        $ordens = OrdemProducao::with('setor', 'responsavel')->get();

        return view('ordens.index', compact('ordens'));
    }

    public function create()
    {
        $setores = Setor::all();
        $funcionarios = Funcionario::all();

        return view('ordens.create', compact('setores', 'funcionarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'setor_id' => 'required',
            'responsavel_id' => 'required',
            'codigo_ordem' => 'required',
            'produto' => 'required',
            'quantidade_planejada' => 'required|integer',
            'quantidade_produzida' => 'nullable|integer',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date',
            'status' => 'required',
            'observacoes' => 'nullable'
        ]);

        OrdemProducao::create($request->all());

        return redirect()
            ->route('ordens.index')
            ->with('success', 'Ordem cadastrada com sucesso!');
    }

    public function show(OrdemProducao $ordem)
    {
        return view('ordens.show', compact('ordem'));
    }

    public function edit(OrdemProducao $ordem)
    {
        $setores = Setor::all();
        $funcionarios = Funcionario::all();

        return view('ordens.edit', compact('ordem', 'setores', 'funcionarios'));
    }

    public function update(Request $request, OrdemProducao $ordem)
    {
        $request->validate([
            'setor_id' => 'required',
            'responsavel_id' => 'required',
            'codigo_ordem' => 'required',
            'produto' => 'required',
            'quantidade_planejada' => 'required|integer',
            'quantidade_produzida' => 'nullable|integer',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date',
            'status' => 'required',
            'observacoes' => 'nullable'
        ]);

        $ordem->update($request->all());

        return redirect()
            ->route('ordens.index')
            ->with('success', 'Ordem atualizada com sucesso!');
    }

    public function destroy(OrdemProducao $ordem)
    {
        $ordem->delete();

        return redirect()
            ->route('ordens.index')
            ->with('success', 'Ordem excluída com sucesso!');
    }
}