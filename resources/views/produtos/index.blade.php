<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Reset de margens e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            padding: 30px;
            color: #333;
        }

        h1 {
            font-size: 2.5em;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .create-btn {
            display: block;
            text-align: center;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            margin-bottom: 20px;
            width: 100%;
        }

        .create-btn:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        li:hover {
            background-color: #f8f9fa;
        }

        .product-info {
            font-size: 1.1em;
        }

        .actions a, .actions button {
            text-decoration: none;
            padding: 8px 15px;
            margin-right: 8px;
            border-radius: 5px;
            color: #fff;
            transition: background-color 0.3s;
        }

        .actions .view-btn {
            background-color: #28a745;
        }

        .actions .edit-btn {
            background-color: #ffc107;
        }

        .actions .delete-btn {
            background-color: #dc3545;
        }

        .actions a:hover, .actions button:hover {
            opacity: 0.8;
        }

        .actions form {
            display: inline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Lista de Produtos</h1>
    <a href="{{ route('produtos.create') }}" class="create-btn">Criar Novo Produto</a>

    @if ($produtos->isEmpty())
        <p style="text-align: center; color: #888;">Nenhum produto encontrado</p>
    @else
        <ul>
            @foreach ($produtos as $produto)
                <li>
                    <div class="product-info">
                        <strong>{{ $produto->nome }}</strong> - R$ {{ number_format($produto->preco, 2, ',', '.') }}
                    </div>
                    <div class="actions">
                        <a href="{{ route('produtos.show', $produto->id) }}" class="view-btn"><i class="fas fa-eye"></i> Ver</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="edit-btn"><i class="fas fa-edit"></i> Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn"><i class="fas fa-trash"></i> Excluir</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>

<!-- Ícones Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>
