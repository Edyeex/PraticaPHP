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
            $numero = $_REQUEST["numero"] ?: "Numero não informado";
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O antecessor de <strong>$numero</strong> é <strong>$antecessor</strong> e o seu sucessor é <strong>$sucessor</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>