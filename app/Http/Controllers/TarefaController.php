<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Tarefa;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
         
    }

    public function criar(){
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

        return redirect()->route('tarefa.create');
    }

    public function show(string $id)
    {
       
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
          
    }

    public function ativarDesativar(string $id)
    {

    }
}
