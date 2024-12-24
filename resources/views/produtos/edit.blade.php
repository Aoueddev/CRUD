<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>

<h1>Editar Produto</h1>

<form action="{{ route('produtos.update', $produto->id) }}" method="POST">
    @csrf
    @method('PUT')  <!-- Usando o método PUT para atualizar o produto -->

    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $produto->nome) }}">
    </div>

    <div>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao">{{ old('descricao', $produto->descricao) }}</textarea>
    </div>

    <div>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" value="{{ old('preco', $produto->preco) }}">
    </div>

    <div>
        <label for="estoque">Estoque:</label>
        <input type="number" id="estoque" name="estoque" value="{{ old('estoque', $produto->estoque) }}">
    </div>

    <button type="submit">Salvar Alterações</button>
</form>

</body>
</html>