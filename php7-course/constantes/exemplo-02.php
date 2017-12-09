<?php

// Dessa forma podemos definir uma constante
// de array que só é possivel no PHP 7
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

// Forma de printar um array na tela
print_r(BANCO_DE_DADOS);

?>