<?php
/*
 * Novidades no PHP 7
 * 1. Ver o tipo de retorno da função
 * 2. O operador spread do javascript
 *
 * */

function soma(int ...$values) {

    // Função que soma todos os elementos
    // do array
    return array_sum($values);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.3, 3.5);
echo "<br>";
echo soma(1, 2, 3);
echo "<br>";
echo soma('3', '3', '3');

?>
