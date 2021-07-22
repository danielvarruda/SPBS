<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SetorRequest;
use App\Setor;

class SetoresController extends Controller
{
    //
    public function index()
    {
        $setores = Setor::all();

        return view('setor.index', ['setores' => $setores]);
    }

    public function create()
    {
        return view('setor.create');
    }

    public function store(SetorRequest $request)
    {
        try {
            $result = Setor::create($request->all());
        } catch (PDOException $e) {
            throwabble($e);
        }

        return redirect()->route('setor.index')->with('msg', 'Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $setor = Setor::find($id);

        return view('setor.edit', ['setor' => $setor]);
    }

    public function update(SetorRequest $request, $id)
    {
        try {
            Setor::findOrFail($id)->update($request->all());
        } catch (PDOException $e) {
            throwabble($e);
        }

        return redirect()->route('setor.index')->with('msg', 'Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Setor::findOrFail($id)->delete();
        return redirect()->route('setor.index');
    }
}
