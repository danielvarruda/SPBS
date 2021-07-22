@extends('layout.app')

@section('content')
    <a href="{{ route('setor.create') }}">Novo</a>

    <table>
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
                <td>{{ $setor->status }}</td>
                <td>
                    <a href="{{ route('setor.edit', ['id' => $setor->id]) }}">
                        <button>
                            Editar    
                        </button>    
                    </a>  
                    
                    <form action="{{ route('setor.destroy', ['id' => $setor->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
@endsection