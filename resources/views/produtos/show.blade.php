<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 2em;
        }

        .product-details {
            margin: 20px 0;
        }

        .product-details p {
            font-size: 1.2em;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .product-details p span {
            font-weight: bold;
            color: #555;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Detalhes do Produto</h1>

    <div class="product-details">
        <p><span>Nome:</span> {{ $produto->nome }}</p>
        <p><span>Descrição:</span> {{ $produto->descricao }}</p>
        <p><span>Preço:</span> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        <p><span>Estoque:</span> {{ $produto->estoque }}</p>
    </div>

    <a href="{{ route('produtos.index') }}" class="back-link">Voltar para a Listagem</a>
</div>

</body>
</html>
