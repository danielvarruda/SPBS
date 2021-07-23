@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Funcionarios</h1>
    </div>

    <form action="{{ route('funcionarios.update', ['id' => $funcionarios->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome" value="{{ $funcionarios->nome }}">
        </div>

        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input class="form-control" type="text" id="sigla" name="matricula" value="{{ $funcionarios->matricula }}">
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="setor">Setor</label>
                <select class="form-control" type="text" id="setor" name="setor_id" value="{{ $funcionarios->setor_id }}">
                    @foreach ($setores as $setor)
                        <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="dtNascimento">Data de nascimento</label>
            <input class="form-control" type="date" id="dtNascimento" name="dt_nascimento"
                value="{{ $funcionarios->dt_nascimento }}">
        </div>

        <div class="form-group">
            <label for="escala">Escala</label>
            <input class="form-control" type="number" id="escala" name="escala_id" value="{{ $funcionarios->escala_id }}">
        </div>

        <div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control" name="ativo" id="ativo">
                <option value="1" {{ $funcionarios->ativo == 1 ? 'selected' : '' }}>Ativo</option>
                <option value="0" {{ $funcionarios->ativo == 0 ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit">
                Salvar
            </button>
        </div>
    </form>

    @include('layout.alert')
@endsection
