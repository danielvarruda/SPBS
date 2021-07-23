<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetoresController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\AuthController;

Route::get('/', function() {
    return view('relogio');
})->name('index');

Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('/home', function() {
            return view('admin.home');
        })->name('home');
    
        Route::get('/setor', [SetoresController::class, 'index'])->name('setor.index');
        Route::get('/setor/cadastro', [SetoresController::class, 'create'])->name('setor.create');
        Route::post('/setor/salvar', [SetoresController::class, 'store'])->name('setor.store');
        Route::get('/setor/{id}/editar', [SetoresController::class, 'edit'])->name('setor.edit');
        Route::put('/setor/{id}/atualizar', [SetoresController::class, 'update'])->name('setor.update');
        Route::delete('/setor/{id}', [SetoresController::class, 'destroy'])->name('setor.destroy');
    
        Route::get('/setor/{id}/funcionarios/', [SetoresController::class, 'funcionarios'])->name('setor.funcionarios');
    
        Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios.index');
        Route::get('/funcionarios/cadastro', [FuncionariosController::class, 'create'])->name('funcionarios.create');
        Route::post('/funcionarios/salvar', [FuncionariosController::class, 'store'])->name('funcionarios.store');
        Route::get('/funcionarios/{id}/editar', [FuncionariosController::class, 'edit'])->name('funcionarios.edit');
        Route::put('/funcionarios/{id}/atualizar', [FuncionariosController::class, 'update'])->name('funcionarios.update');
        Route::delete('/funcionarios/{id}', [FuncionariosController::class, 'destroy'])->name('funcionarios.destroy');
    });
});