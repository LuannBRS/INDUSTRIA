<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
         
    }

    public function criar(){
        return view('usuarios.criar');
    }
    
    
    public function create()
    {
        return view('usuarios.create');  
    }

    public function store(Request $request)
    {
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email
    ]);

        return view('usuarios.create');
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
