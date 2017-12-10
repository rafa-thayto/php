<?php

// LC_ALL => muda toda a localização que tiver para portugues
// nesse caso
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));


?>