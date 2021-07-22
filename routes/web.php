<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetoresController;

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

Route::get('/setor', [SetoresController::class, 'index'])->name('setor.index');
Route::get('/setor/cadastro', [SetoresController::class, 'create'])->name('setor.create');
Route::post('/setor/salvar', [SetoresController::class, 'store'])->name('setor.store');
Route::get('/setor/{id}/editar', [SetoresController::class, 'edit'])->name('setor.edit');
Route::put('/setor/{id}/atualizar', [SetoresController::class, 'update'])->name('setor.update');
Route::delete('/setor/{id}', [SetoresController::class, 'destroy'])->name('setor.destroy');