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
    <h1>Conversor de moedas</h1>
    <?php 
    $cotacao =6.16;
    $real = $_GET["din"] ?? 0;

    $dolar = $real / $cotacao;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>