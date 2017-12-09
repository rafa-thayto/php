<?php

$a = 10;

// QUANDO TEM O & COMERCIAL, É PORQUE
// A FUNÇÃO TEM PASSAGEM DE PARÂMETRO
// POR REFERÊNCIA
function trocaValor(&$valor) {

    $valor += 50;

    return $valor;

}

echo $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;


?>