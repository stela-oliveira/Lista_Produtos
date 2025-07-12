<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Nova Categoria</h2>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome da Categoria</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>