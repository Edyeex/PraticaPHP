<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>

    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?: "Nome não informado"; // Passando o valor de nome do HTML para $nome do PHP
            $sobrenome = $_REQUEST["sobrenome"] ?: "Sobrenome não informado"; // Passando o valor de sobrenome do HTML para $sobrenome do PHP
            
            echo "Seja bem vindo <strong>$nome $sobrenome</strong>! Esse é um teste de PHP"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p> <!-- "Botão" para voltar para a pagina anterior -->
    </main>
    
</body>
</html>