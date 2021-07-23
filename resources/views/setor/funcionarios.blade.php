@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setor</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-primary" href="{{ route('setor.index') }}">Voltar</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Setor</th>
                <th>Data de nascimento</th>
                <th>Escala</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($funcionarios as $key => $funcionario)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $funcionario->nome }}</td>
                <td>{{ $funcionario->matricula }}</td>
                <td>{{ $funcionario->setor->nome}}</td>
                <td>{{ $funcionario->dt_nascimento }}</td>
                <td>{{ $funcionario->escala_id}}</td>
                <td>
                    <button class="btn btn-{{ $funcionario->ativo == 1 ? 'success' : 'danger' }} badge">
                        {{ $funcionario->ativo == 1 ? 'Ativo' : 'Inativo' }}
                    </button>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>

    @include('layout.alert')
@endsection