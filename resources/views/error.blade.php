<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
</head>
<body>
    <header>
        <h1>Houve um problema: </h1>
    </header>

    <main>
        <p>{{ $message }}</p>
        <a href="{{ route($backTo) }}">Voltar</a>
    </main>
    
</body>
</html>