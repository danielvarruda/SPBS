@extends('layout.app')

@section('content')
    <form action="{{ route('setor.update', ['id' => $setor->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div>   
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $setor->nome }}">
        </div>

        <div>
            <label for="sigla">Sigla</label>
            <input type="text" id="sigla" name="sigla" value="{{ $setor->sigla }}">
        </div>

        <div>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" value="{{ $setor->descricao }}">
        </div>

        <div>
            <label for="ativo">Ativo</label>
            <select name="ativo" id="ativo">
                <option value="1" {{ $setor->ativo == 1 ? 'selected' : '' }}>Ativo</option>
                <option value="0" {{ $setor->ativo == 0 ? 'selected' : '' }}>Inativo</option>
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