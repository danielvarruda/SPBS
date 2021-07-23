@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setor</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-primary" href="{{ route('setor.create') }}">Novo</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($setores as $key => $setor)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $setor->nome }}</td>
                <td>{{ $setor->sigla }}</td>
                <td>{{ $setor->descricao }}</td>
                <td>
                    <button class="btn btn-{{ $setor->ativo == 1 ? 'success' : 'danger' }} badge">
                        {{ $setor->ativo == 1 ? 'Ativo' : 'Inativo' }}
                    </button>
                </td>
                <td>
                    <div class="d-flex">
                        <div>
                            <a href="{{ route('setor.funcionarios', ['id' => $setor->id]) }}">
                                <button class="btn btn-warning">
                                    Funcionários    
                                </button>
                            </a> 
                        </div> 

                        <div class="ms-1">
                            <a href="{{ route('setor.edit', ['id' => $setor->id]) }}">
                                <button class="btn btn-info">
                                    Editar    
                                </button>    
                            </a> 
                        </div> 
    
                        <div class="ms-1">
                            <form action="{{ route('setor.destroy', ['id' => $setor->id]) }}" method="POST">
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