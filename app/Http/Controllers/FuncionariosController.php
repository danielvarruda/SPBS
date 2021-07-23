<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;
use App\Setor;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        $setores = Setor::all();
        // return dd($setores);
        return view('funcionarios.create', compact('setores'));
    }

    public function store(FuncionarioRequest $request)
    {
        // return dd($request->all());
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
        $setores = Setor::all();

        return view('funcionarios.edit', compact('funcionarios', 'setores'));
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
        return redirect()->route('funcionarios.index')->with('msg', 'Excluído com sucesso!');
    }
}