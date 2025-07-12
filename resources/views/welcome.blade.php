<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: rgb(230, 233, 255);
            border-radius: 5px;
        }

        header {
            background-color: rgb(141, 167, 252);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }

        nav {
            background-color: rgb(83, 123, 255);
            overflow: hidden;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: rgb(56, 102, 253);
            ;
        }

        main {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        ul {
            margin-top: 10px;
            padding-left: 20px;
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