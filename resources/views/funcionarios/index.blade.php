@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Funcionarios</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-primary" href="{{ route('funcionarios.create') }}">Novo</a>
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
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($funcionarios as $key => $funcionario)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $funcionario->nome }}</td>
                <td>{{ $funcionario->matricula }}</td>
                <td>{{ $funcionario->setor }}</td>
                <td>{{ $funcionario->dt_nascimento }}</td>
                <td>{{ $funcionario->escala_id}}</td>
                <td>{{ $funcionario->ativo}}</td>
                <td>
                    <button class="btn btn-{{ $funcionarios->ativo == 1 ? 'success' : 'danger' }} badge">
                        {{ $funcionarios->ativo == 1 ? 'Ativo' : 'Inativo' }}
                    </button>
                </td>
                <td>
                    <div class="d-flex">
                        <div>
                            <a href="{{ route('funcionarios.edit', ['id' => $funcionarios->id]) }}">
                                <button class="btn btn-info">
                                    Editar    
                                </button>    
                            </a> 
                        </div> 
    
                        <div class="ms-1">
                            <form action="{{ route('funcionarios.destroy', ['id' => $funcionarios->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <button class="btn btn-danger" type="submit">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>

    @include('layout.alert')
@endsection