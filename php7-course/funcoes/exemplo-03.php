<?php

// Os valores obrigatórios ficam sempre
// a esquerda
function ola($texto, $periodo = "Bom dia") {
    return "Olá $texto! $periodo!<br>";
}

echo ola("mundo");
echo ola("", "Boa noite");
echo ola("Rafael", "Boa tarde");
echo ola("Thayto","");

?>