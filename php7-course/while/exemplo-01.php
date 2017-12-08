<?php

    $condicao = true;

    while($condicao) {

        // rand é uam função php que retorna
        // um número randômico
        $numero = rand(1, 10);

        if ($numero === 3) {

            echo "TRÊS!!!";
            $condicao = false;

        }

        echo $numero . " ";
    }

?>