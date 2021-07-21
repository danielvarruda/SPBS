<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();

        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(FuncionarioRequest $request)
    {
        try {
            $result = Funcionario::create($request->all());
        } catch (PDOException $e) {
            throwabble($e);
        }

        return redirect()->route('funcionarios.index')->with('msg', 'Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $funcionarios = Funcionario::find($id);

        return view('funcionarios.edit', compact('funcionarios'));
    }

    public function update(FuncionarioRequest $request, $id)
    {
        try {
            Funcionario::findOrFail($id)->update($request->all());
        } catch (PDOException $e) {
            throwabble($e);
        }

        return redirect()->route('funcionarios.index')->with('msg', 'Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Funcionario::findOrFail($id)->delete();
        return redirect()->route('funcionarios.index');
    }
}