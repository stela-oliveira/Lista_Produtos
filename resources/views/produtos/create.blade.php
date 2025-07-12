<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Novo Produto</h2>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome do Produto</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" name="preco" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>