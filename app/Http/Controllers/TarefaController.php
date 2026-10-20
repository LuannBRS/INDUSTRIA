<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
        $tarefasAFazer = Tarefa::with('usuario')
            ->where('status', 'A Fazer')
            ->get();

        $tarefasFazendo = Tarefa::with('usuario')
            ->where('status', 'Fazendo')
            ->get();

        $tarefasPronto = Tarefa::with('usuario')
            ->where('status', 'Pronto')
            ->get();

        return view(
            'tarefa.index',
            compact(
                'tarefasAFazer',
                'tarefasFazendo',
                'tarefasPronto'
            )
        );
    }

    public function criar()
    {
        return view('tarefa.criar');
    }

    public function create()
    {
        $usuarios = Usuario::all();

        return view('tarefa.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        Tarefa::create([
            'descricao' => $request->descricao,
            'nome_setor' => $request->nome_setor,
            'prioridade' => $request->prioridade,
            'status' => $request->status,
            'data' => $request->data,
            'usuario_id' => $request->usuario_id
        ]);

        return redirect()->route('tarefa.index');
    }

    public function show(string $id)
    {
        $tarefa = Tarefa::with('usuario')->findOrFail($id);

        return view('tarefa.show', compact('tarefa'));
    }

    public function edit(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $usuarios = Usuario::all();

        return view('tarefa.edit', compact('tarefa', 'usuarios'));
    }

    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::findOrFail($id);

        $tarefa->update([
            'descricao' => $request->descricao,
            'nome_setor' => $request->nome_setor,
            'prioridade' => $request->prioridade,
            'status' => $request->status,
            'data' => $request->data,
            'usuario_id' => $request->usuario_id
        ]);

        return redirect()->route('tarefa.index');
    }

    public function destroy(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        return redirect()->route('tarefa.index');
    }

    public function ativarDesativar(string $id)
    {
        //
    }

    public function alterarstatus(Request $request, string $id)
    {
        $tarefa = Tarefa::findOrFail($id);

        $tarefa->status = $request->input('status');
        $tarefa->save();

        return redirect()->route('tarefa.index');
    }
}