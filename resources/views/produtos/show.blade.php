<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <p>Nome: {{ $produto->nome }}</p>
    <p>Preço: R$ {{ $produto->preco }}</p>
    <a href="{{ route('produtos.index') }}">Voltar</a>
</body>
</html>
