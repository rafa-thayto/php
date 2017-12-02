<?php
// O include-require tenta funcionar mesmo que o arquivo
// não exista ou esteja com algum tipo ed problema
// e o include possui mais recursos que o require
// ele pode pegar arquivos do
// INCLUDE PATH (diretório padrao que você configura no PHP)
// include_once / require_once pega só o 1 method, para não ocorrer o erro de você chamar
// o method mais de uma vez
//include once "inc/exemplo-01.php
//include "inc/exemplo-01.php";


// O require obriga que o arquivo exista e que o
// arquivo esteja funcionando corretamente
require "inc/exemplo-01.php";

$resultado = somar(10, 25);

echo $resultado;

?>