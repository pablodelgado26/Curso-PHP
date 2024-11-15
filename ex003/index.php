<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        $num = 0b1010;
        echo "O valor da variável é $num";

        $v = 300;
        var_dump($v);

        $num2 = (int) 3e2;
        echo  "O valor é $num2";

        $casado = false;
        var_dump($casado);

        $vet = [1, 2, 3, 4, 5];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa();
        var_dump($p);
        ?>
</body>
</html>