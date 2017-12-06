<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Ok">

</form>

<?php

// Verifica se foi requisitado um get e executa
if(isset($_GET)) {
    // $key = nome dos campos
    // $value = valor dentro dos campos
    foreach($_GET as $key => $value) {

        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value;

        echo "<hr>";

    }
}

?>