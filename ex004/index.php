<?php 
    $nome = "Pablo";
    $sobrenome = "Delgado";
    echo "Meu nome é $nome $sobrenome \u{1F596}";

    const ESTADO = "SP";
    echo " Moro no estado de " . ESTADO;

    echo ", Estamos no ano de " . date("Y");

    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo " $nom \"Minotauro\" $snom";

    $curso = "PHP";
    $ano = date('Y');

    echo <<< FRASE
     Estou estudando
        $curso em $ano
    FRASE;

    echo <<< 'FRASE'
     Estou estudando
        $curso em $ano
    FRASE;
    ?>