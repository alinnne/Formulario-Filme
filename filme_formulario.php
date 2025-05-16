<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            background-color:rgb(37, 70, 38);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color:rgb(46, 49, 46);
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Cadastre um filme aqui!</h1>
        <form action="filme_card.php" method="POST">
            <label for="nomeFilme">Nome do Filme:</label>
            <input type="text" name="nomeFilme" id="nomeFilme" placeholder="Ex: A Origem" required>

            <label for="nomeDiretor">Nome do Diretor:</label>
            <input type="text" name="nomeDiretor" id="nomeDiretor" placeholder="Ex: Christopher Nolan" required>

            <label for="ano">Ano de Lançamento:</label>
            <input type="number" name="ano" id="ano" placeholder="Ex: 2010" required>

            <label for="imagem">URL da Capa do Filme:</label>
            <input type="text" name="imagem" id="imagem" placeholder="https://exemplo.com/imagem.jpg" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>
