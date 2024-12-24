<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="{{ route('produtos.create') }}">Criar Novo Produto</a>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                {{ $produto->nome }} - R$ {{ $produto->preco }}
                <a href="{{ route('produtos.show', $produto->id) }}">Ver</a>
                <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
