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
        <h1>Valor convertido</h1>
    </header>
    <main>
        <?php 
            $quantia = $_REQUEST["quantia"] ?: "Valor não informado";
            $total = $quantia / 5.14;

            echo "O valor <strong>R$". number_format($quantia, 2) ."</strong> convertido ficará: <strong>U$</strong>" . number_format($total, 2) . "*<br><br><br>";
            echo "A conversão está sendo feita com a cotação fixa de 5,14";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>