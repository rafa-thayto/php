<?php

require_once("config.php");

// Dessa forma podemos encontrar onde está
// localizada a pasta temp das sessions
echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
    // = 0
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
        break;
    // = 1
    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas nenhuma exister";
        break;
    // = 2
    case PHP_SESSION_ACTIVE:
        echo "AS sessões estão habilitadas, e uma existe";
        break;
}

?>