<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Produtos</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f1fdf4;
    color: #2e4a3a;
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

header {
    background-color: #4caf50;
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
}

nav {
    background-color: #66bb6a;
    margin: 20px 0;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    gap: 10px;
}

nav a {
    color: #fff;
    padding: 14px 20px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
    border-radius: 5px;
}

nav a:hover {
    background-color: #388e3c;
}

main {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 100, 0, 0.1);
}

ul {
    margin-top: 10px;
    padding-left: 20px;
    line-height: 1.8;
}
    </style>
</head>
<body>
    <header>
        <h1>Gerenciamento de Produtos</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Página Inicial</a>
        <a href="{{ url('/produtos') }}">Página de Produtos</a>
        <a href="{{ url('/categorias') }}">Página de Categorias</a>
    </nav>

    <main>
        <h2>Bem-vindo(a)!</h2>
        <p>Este sistema permite realizar as seguintes operações:</p>
        <ul>
            <li>Cadastro de novos produtos</li>
            <li>Edição de produtos</li>
            <li>Exclusão de produtos</li>
            <li>Cadastro de novas categorias</li>
            <li>Edição de categorias</li>
            <li>Exclusão de categorias</li>
        </ul>
    </main>
</body>
</html>