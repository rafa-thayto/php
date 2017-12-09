<?php

// Toda a página que você for usar
// uma session, você deve utilizar
// session_start(); para iniciar a
// session
// session_start();
require_once("config.php");

// essa função apaga a var do sistema
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

// essa função apaga a var do sistema
// e destroi tudo, até o usuario
session_destroy();

?>