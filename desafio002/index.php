<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 1;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max... <br>O valor gerando foi <strong>$num</strong></p>"
        ?>

        <button onclick="javascript:document.location.reload()"> Gerar outro</button>
    </main>
</body>
</html>