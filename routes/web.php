<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetoresController;
use App\Http\Controllers\FuncionariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function() {
    return view('home');
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