<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Nossos Produtos</h1>
        <a href="{{ route('produtos.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Novo Produto
        </a>
       <table class="table table-striped table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td>{{ $produto->categoria?->nome }}</td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-success">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-success"
                                    onclick="return confirm('Tem certeza que deseja excluir?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Nenhum produto cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>