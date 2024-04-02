<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <header>
        <h1>Usuários</h1>
    </header>

    <main>
        <a href="{{ route('user.add') }}">Adicionar usuário</a>
        <table>
            <thead>
                <th>Opções</th>
                <th>Usuário</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Tipo</th>
                <th>Controle</th>
            </thead>
            <tbody>
                @foreach($users as $id => $user)
                <tr>
                    <td>
                        <a href="{{ route('user.edit', ['id' => $id]) }}">Editar</a>
                        <a href="{{ route('user.delete', ['id' => $id]) }}">Remover</a>
                    </td>
                    <td>{{ $user['usuario'] }}</td>
                    <td>{{ $user['nome'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['tipo'] }}</td>
                    <td>
                        <a href="{{ route('entry.create', ['id' => $id, 'tipo' => 'E']) }}">Adicionar entrada</a>
                        <a href="{{ route('entry.create', ['id' => $id, 'tipo' => 'S']) }}">Adicionar saida</a>
                        <a href="{{ route('entry.index' , ['id' => $id]) }}">Listar entradas</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    
</body>
</html>