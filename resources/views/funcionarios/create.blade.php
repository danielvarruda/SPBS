@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Funcionário</h1>
    </div>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">   
            <label for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>

        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input class="form-control" type="text" id="matricula" name="matricula">
        </div>

        <div class="form-group">
            <label for="setor">Setor</label>
            <select class="form-control" type="text" id="setor" name="setor_id">
                @foreach ($setores as $setor)
                    <option value="{{$setor -> id}}">{{$setor -> nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dt_nascimento">Data de Nascimento</label>
            <input class="form-control" type="date" id="dtNascimento" name="dt_nascimento">
        </div>

        <div class="form-group">
            <label for="escala">Escala</label>
            <input class="form-control" type="number" id="escala" name="escala_id" placeholder="Digite um número...">
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