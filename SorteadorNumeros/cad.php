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
        <h1>RESULTADO:</h1>
    </header>
    <main>
        <?php 
            $numero = $_REQUEST["numero"] ?: "Numero não informado!";
            $escolhido = rand(0, 100);

            echo"Seu numero foi: $numero <br><br>";
            echo "O numero sorteado foi: $escolhido";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>