<?php

// Instânciando a classe DateTime();
$dt = new DateTime();

// Instanciando o periodo, no contrutor você especifica
// que é o perído e você coloca um "P" e o tempo "15" e
// a quantidade "D"
$perido = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

// Method add serve para adicionar uma data
// e ele espera como parâmetro uma outra classe que guarda
// um intervalo por perídodo
$dt->add($perido);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>