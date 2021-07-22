@extends('layout.app')

@section('content')
    <form action="{{ route('setor.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div>   
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $user->name }}">
        </div>

        <div>
            <label for="sigla">Sigla</label>
            <input type="text" id="sigla" name="sigla" value="{{ $user->sigla }}">
        </div>

        <div>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" value="{{ $user->descricao }}">
        </div>

        <div>
            <label for="ativo">Ativo</label>
            <input type="checkbox" id="ativo" name="ativo" {{ $user->ativo ?? 'checked' : ''}}>
        </div>

        <div>
            <button type="submit">
                Salvar
            </button>
        </div>
    </form>
@endsection