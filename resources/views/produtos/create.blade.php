

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>

<h1>Criar Novo Produto</h1>

<form action="{{ route('produtos.store') }}" method="POST">
    @csrf

    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
    </div>

    <div>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao">{{ old('descricao') }}</textarea>
    </div>

    <div>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" value="{{ old('preco') }}">
    </div>

    <div>
        <label for="estoque">Estoque:</label>
        <input type="number" id="estoque" name="estoque" value="{{ old('estoque') }}">
    </div>

    <button type="submit">Criar Produto</button>
</form>

</body>
</html>
