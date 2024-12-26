<form action="{{ route('produtos.store') }}" method="POST">
        @csrf
       <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
            @error('nome')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao">{{ old('descricao') }}</textarea>
            @error('descricao')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" value="{{ old('preco') }}">
            @error('preco')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="estoque">Estoque:</label>
            <input type="number" id="estoque" name="estoque" value="{{ old('estoque') }}">
            @error('estoque')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">
            <i class="fas fa-plus-circle"></i> Criar Produto
        </button>
    </form>