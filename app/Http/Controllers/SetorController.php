<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setor;
use Illuminate\Support\Facades\Auth;

class SetorController extends Controller
{
    public function index(Request $request)
    {
         $setores = Setor::query();
        if($request->filled('id')){
            $setores = Setor::where('id', $request->id)->get();
        }

        if($request->filled('nome')){
            $setores = Setor::where('nome','like','%'.$request->nome.'%');
        }

        if($request->filled('status')){
            $setores = Setor::where('ativo',$request->status);
        }

        $setores = $setores->get();
        return view('setores.index', compact('setores'));
    }

    public function criar(){
        return view('setores.criar');

    }
    
    
    public function create()
    {
        return view('setores.create');  
    }

    public function store(Request $request)
    {
        Setor::create([
            'nome' => $request->nome
    ]);

        return redirect()->route('setores.index');
    }

    public function show(string $id)
    {
        $setor = Setor::find($id);
        return view ('setores.show',compact('setor'));
    }

    public function edit(string $id)
    {
        $setor = Setor::find($id);
        return view ('setores.edit',compact('setor'));
    }

    public function update(Request $request, string $id)
    {
        $setor = Setor::find($id);
        $setor->update($request->only('nome'));
        return redirect()->route('setores.index');
    }

    public function destroy(string $id)
    {
          $setor = Setor::find($id);
          $setor->delete();
          return redirect()->route('setores.index');
    }

    public function ativarDesativar(string $id)
    {
        $setor = Setor::find($id);
        $setor->ativo = !$setor->ativo;
        $setor->save();
        return redirect()->route('setores.index');
    }
}
