<?php

// Transforma uma data em um time
// que tem o inicio em 19**
// strtotime => aceita expressoes
// e gera um timestamp
//$ts = strtotime("2001-09-11");
$ts = strtotime("now");

// Formata a data, pega a data que você passou
echo date("l, d/n/Y", $ts);

?>