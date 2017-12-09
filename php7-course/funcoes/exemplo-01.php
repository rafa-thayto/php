<?php

function ola() {

    return "Hello World!<br>";

}

echo ola();
var_dump(ola());

$frase = ola();

// Method que vê quantos caracteres
// a string possui
echo strlen($frase);

?>