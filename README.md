# 🛒 Sistema de Gerenciamento de Produtos

Este é um projeto desenvolvido com **Laravel** e **Bootstrap**, seguindo o padrão **MVC**, que permite:

- 📦 Gerenciar produtos (cadastrar, listar, editar, excluir)
- 🏷️ Gerenciar categorias (cadastrar, listar, editar, excluir)
- 💡 Interface simples com Bootstrap 5 e ícones via Bootstrap Icons

---

## 🚀 Funcionalidades

### Produtos
- Listar todos os produtos
- Cadastrar novo produto (com nome, preço e categoria)
- Editar produto existente
- Excluir produto

### Categorias
- Listar todas as categorias
- Cadastrar nova categoria
- Editar categoria existente
- Excluir categoria

---

## ⚙️ Tecnologias Utilizadas

- Laravel (Framework PHP)
- Blade (Template engine do Laravel)
- Bootstrap 5 (CSS e componentes)
- Bootstrap Icons (Ícones)
- MySQL ou outro banco compatível
- Eloquent ORM

---

## 🧱 Estrutura do Projeto

```
├── app/
│   └── Http/
│       └── Controllers/
│           ├── ProdutoController.php
│           └── CategoriaController.php
├── app/
│   └── Models/
│       ├── Produto.php
│       └── Categoria.php
├── database/
│   └── migrations/
│       ├── create_produtos_table.php
│       └── create_categorias_table.php
│   └── seeders/
│       └── ProdutosSeeder.php
├── resources/
│   └── views/
│       ├── produtos/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   └── edit.blade.php
│       └── categorias/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
```

---

## ⚡ Como Executar o Projeto

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seuusuario/seu-repo.git
   cd seu-repo
   ```

2. **Instale as dependências**
   ```bash
   composer install
   ```

3. **Configure o `.env`**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Edite o `.env` e configure o banco de dados:

   ```env
   DB_DATABASE=nome_do_banco
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

4. **Rode as migrations e seeders**
   ```bash
   php artisan migrate --seed
   ```

5. **Inicie o servidor**
   ```bash
   php artisan serve
   ```

6. **Acesse no navegador:**
   ```
   http://localhost:8000/produtos
   ```

---

## 👨‍💻 Desenvolvido por

**Stela de Oliveira** - (https://github.com/stela-oliveira)
**Nayara Lopes Marx** - (https://github.com/nayara-marx)
Curso: Engenharia de Software – Universidade do Contestado
