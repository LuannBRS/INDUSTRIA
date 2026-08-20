<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setores',[SetorController::class, 'index'])
->name('setores.index');

Route::get('/criar',[SetorController::class, 'criar'])
->name('setores.criar');

Route::patch('/setores/{id}/status',[SetorController::class, 'ativarDesativar'])
->name('setores.ativar-desativar');

Route::resource('setores',SetorController::class);

Route::resource('funcionarios', FuncionarioController::class);

