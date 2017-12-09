<?php

session_id('9f7gttke9ev6jbvqvdgakkvjmp');

require_once("config.php");
/*
 * Com esse id, usuários mal
 * intencionados podem utilizar
 * a sua session e comprar coisas
 * por você, etc...
 */
// Cria um novo identificador
// de sessao
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>