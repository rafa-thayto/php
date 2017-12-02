<?php

$a = null;
$b = 8;
$c = 10;

// Se o primeiro for nulo ele mostra o próximo e assim por diante
echo $a ?? $b ?? $c
// Esse operador é muito interessante para o banco de dados
?>