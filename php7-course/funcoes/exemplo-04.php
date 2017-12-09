<?php

function ola() {

    // Essa função pega todos os argumentos
    // passados na função e armazena
    // em um array
    $argumentos = func_get_args();

    return $argumentos;

}

var_dump(ola("Bom dia", 10, 14.5));

?>
