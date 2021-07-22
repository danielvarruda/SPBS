@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setor</h1>
    </div>

    <form action="{{ route('setor.store') }}" method="POST">
        @csrf

        <div class="form-group">   
            <label for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>

        <div class="form-group">
            <label for="sigla">Sigla</label>
            <input class="form-control" type="text" id="sigla" name="sigla">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" type="text" id="descricao" name="descricao">
        </div>

        <div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control" name="ativo" id="ativo">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>

        <div>
            <button class="btn btn-success" type="submit">
                Salvar
            </button>
        </div>
    </form>
    
    @include('layout.alert')
@endsection