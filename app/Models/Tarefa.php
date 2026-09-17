<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefa';
    protected $fillable = ['descricao', 'nome_setor', 'prioridade', 'status', 'data', 'usuario_id'];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}

