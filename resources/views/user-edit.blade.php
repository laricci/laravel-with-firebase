<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <header>
        <h1>Editar Usuário</h1>
    </header>

    <main>
        <a href="{{ route('user.index') }}">Voltar</a>
        {{ Form::open(['url' => route('user.update', ['id' => $id]) ]) }}
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px 8px; width: min-content;">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario" value="{{ $user['usuario'] }}">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $user['usuario'] }}">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" value="{{ $user['usuario'] }}">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" id="tipo" value="{{ $user['tipo'] }}" readonly>
                <label for="data">Data</label>
                <input type="date" name="data" id="data" value="{{ $user['data'] }}" readonly>
            </div>
            <button type="submit">Salvar</button>
        {{ Form::close() }}
    </main>
    
</body>
</html>