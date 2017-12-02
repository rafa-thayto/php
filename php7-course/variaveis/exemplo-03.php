<?php

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
//  echo $frutas[2];

$nascimento = new DateTime();

// var_dump($nascimento);
////////////////////////////////////////
// fopen é um method que lê os arquivos do HD
$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);
$null = null;
$vazio = "";
var_dump($null);
var_dump($vazio);

?>