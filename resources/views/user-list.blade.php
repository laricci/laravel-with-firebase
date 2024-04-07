@extends('layouts.template')

@section('title')
    Usuários
@endsection

@section('content')

    <div>
        <a class="btn btn-primary" href="{{ route('user.add') }}">Adicionar usuário</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <th>Opções</th>
            <th>Usuário</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>Data de Cadastro</th>
        </thead>
        <tbody>
            @foreach($users as $id => $user)
            <tr>
                <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Opções
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('user.edit', ['id' => $id]) }}">Editar Usuário</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.delete', ['id' => $id]) }}">Remover Usuário</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('entry.create', ['id' => $id, 'tipo' => 'E']) }}">Registrar Entrada</a></li>
                        <li><a class="dropdown-item" href="{{ route('entry.create', ['id' => $id, 'tipo' => 'S']) }}">Registrar Saída</a></li>
                        <li><a class="dropdown-item" href="{{ route('entry.index' , ['id' => $id]) }}">Listar Registros</a></li>
                    </ul>
                </div>
                    
                </td>
                <td class="align-middle">{{ $user['usuario'] }}</td>
                <td class="align-middle">{{ $user['nome'] }}</td>
                <td class="align-middle">{{ $user['email'] }}</td>
                <td class="align-middle">{{ $user['tipo'] == 'A' ? 'Aluno' : 'Funcionário' }}</td>
                <td class="align-middle">{{ date('d/m/Y', strtotime($user['data'])) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

