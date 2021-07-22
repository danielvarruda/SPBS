@extends('layout.app')

@section('content')
    <form action="{{ route('setor.store') }}" method="POST">
        @csrf

        <div>   
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
        </div>

        <div>
            <label for="sigla">Sigla</label>
            <input type="text" id="sigla" name="sigla">
        </div>

        <div>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao">
        </div>

        <div>
            <label for="ativo">Ativo</label>
            <select name="ativo" id="ativo">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>

        <div>
            <button type="submit">
                Salvar
            </button>
        </div>
    </form>
    
    @include('layout.alert')
@endsection