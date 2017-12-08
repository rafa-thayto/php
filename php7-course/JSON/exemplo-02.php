<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

// Decodifica o json e o transforma
// em um array novamente, se não colocar
// o true, ele não transforma totalmente
// o array, ele deixa só como um objeto
//$data = json_decode($json);
$data = json_decode($json, true);

var_dump($data);

?>