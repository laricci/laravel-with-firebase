<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <header>
        <h1>Entradas de {{ isset($user['nome']) ? $user['nome'] : '' }}</h1>
    </header>

    <main>
        <a href="{{ route('user.index') }}">Voltar</a>
        <table>
            <thead>
                <th>Data</th>
                <th>Hora</th>
                <th>Tipo</th>
            </thead>
            <tbody>
                @foreach($entrys as $id => $entry)
                <tr>
                    <td>{{ $entry['data'] }}</td>
                    <td>{{ $entry['hora'] }}</td>
                    <td>{{ $entry['tipo'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    
</body>
</html>