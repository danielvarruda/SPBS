@extends('layout.app')

@section('content')
    <div>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf

            <div class="borda">
                <div class="titulo">
                    <h1>Tela de Login</h1>
                </div>

                <div class="matricula">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>

                <div>
                    <label class="senha">Senha</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        Entrar
                    </button>
                </div>
            </div>
        </form>
    </div>

    <style>
    .borda {
        border-radius: 50px;
    }
    </style>

    @include('layout.alert')

@endsection