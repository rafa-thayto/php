<?php

$a = 35.0;
$b = 35;

// Operator spaceship do php 7
// Se os dois valores forem iguais ele retorna 0
// Se o primeiro valor foi menor ele retorna -1 e o segundo maior
// Se o segundo valor foi menor ele retorna 1 e o primeiro maior
var_dump($a <=> $b);

?>