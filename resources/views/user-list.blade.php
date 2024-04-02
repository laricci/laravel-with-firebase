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
                <th>Usuário</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Tipo</th>
            </thead>
            <tbody>
                @foreach($users as $id => $user)
                <tr>
                    <td>{{ $user['usuario'] }}</td>
                    <td>{{ $user['nome'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['tipo'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    
</body>
</html>