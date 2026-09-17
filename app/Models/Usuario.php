<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nome', 'email'];

    public $timestamps = false;
    
    public function tarefas()
    {
        return $this->hasMany(Tarefa::class, 'usuario_id');
    }

}

 