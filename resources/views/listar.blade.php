<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produtos</title>

    </head>
    <body>
        <h1>Produtos</h1>

            <label for="lblNomeComprador">Nome do Comprador:</label>
            <input type="text" name="nome" value="{{ $compra->nome }}">
            <br><br>
            <label for="lblNomeProduto">Nome do Produto:</label>
            <input type="text" name="nomeproduto" value="{{ $compra->nomeproduto }}">
            <br><br>
            <label for="lblValorCompra">Valor da Compra:</label>
            <input type="text" name="valor" value="{{ $compra->valor }}">
            <br><br>
            <button>Listar Compra</button>
        </form>
    </body>
</html>


