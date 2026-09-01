    <?php

    use App\Http\Controllers\ManutencaoController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\SetorController;
    use App\Http\Controllers\EquipamentoController;
    use App\Http\Controllers\ChamadoController;
    use App\Http\Controllers\FuncionarioController;
    use App\Http\Controllers\OrdemProducaoController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        route::resource('setores', SetorController::class);
        route::resource('funcionarios', FuncionarioController::class);
        Route::resource('equipamentos', EquipamentoController::class);
        route::patch('/setores/{id}/status', [SetorController::class, 'ativarDesativar'])->name('setores.ativar-desativar');
        Route::resource('manutencoes', ManutencaoController::class)
            ->parameters(['manutencoes' => 'manutencao']);

        Route::resource('ordens', OrdemProducaoController::class)
            ->parameters(['ordens' => 'ordem']);

        Route::middleware('auth')->group(function () {
        Route::resource('chamados', ChamadoController::class);
        });
    });



    require __DIR__.'/auth.php';