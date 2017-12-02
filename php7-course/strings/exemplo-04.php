<?php

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";

// Query
// Busca dentro da string a palavra mãe e mostra a posição
$q = strpos($frase, $palavra);
var_dump($q);

// Mostra a string da posicao até/
$texto = substr($frase, 0, $q);
var_dump($texto);

echo "<br>";

// strlen() conta o tamanho da string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>