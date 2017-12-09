<?php

$pessoa = array(
    'nome' => 'Rafael',
    'idade' => 20
);

// Você pode usar o operador por referência
// em foreach tbm
foreach ($pessoa as &$value) {

    if(gettype($value) === 'integer')
        $value += 10;

    echo $value . '<br>';
}

print_r($pessoa);


?>