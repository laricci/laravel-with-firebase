<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
</head>
<body>
    <header>
        <h1>Adicionar Usuário</h1>
    </header>

    <main>
        {{ Form::open(['url' => route('user.create') ]) }}
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px 8px; width: min-content;">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="A">Aluno</option>
                    <option value="F">Funcionário</option>
                </select>
                <label for="data">Data</label>
                <input type="date" name="data" id="data" value="{{ date('Y-m-d') }}" readonly>
            </div>
            <button type="submit">Salvar</button>
        {{ Form::close() }}
    </main>
    
</body>
</html>