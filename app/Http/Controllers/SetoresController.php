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
        $setores = Setor::from('setores')->get();

        return view('setor.index', ['setores' => $setores]);
    }

    public function create()
    {
        return view('setor.create');
    }

    public function store(SetorRequest $request)
    {
        Setor::create($request->all());
    }

    public function edit($id)
    {
        $setor = Setor::find($id);

        return view('setor.edit', ['setor' => $setor]);
    }

    public function update(SetorRequest $request, $id)
    {
        try {
            Setor::findOrFail($id)->update($request);

            return redirect()->route('setor.index');
        } catch (PDOException $e) {
            dd($e);
        }
    }

    public function destroy()
    {
        Setor::findOrFail($id)->delete();
        return redirect()->route('setor.index');
    }
}
