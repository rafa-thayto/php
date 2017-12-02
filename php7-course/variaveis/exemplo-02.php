<?php

    $anoNascimento = 2001;
    $nome1 = "Rafael";
    $sobrenome = "Thayto";

    echo "$nome1 <br>";

    $nomeCompleto = $nome1 . " " . $sobrenome;

    unset($nome1);

    echo "$nomeCompleto <br>";

    if(isset($nome1)) {
        echo "$nome1";
    } else {
        echo 'A variável $nome1 não foi definida';
    }

?>