<form method="GET">
    <fieldset>
    <legend>Cadastro</legend>
    Nome:
    <input type="text" name="nome"><br><br>
    Email:
    <input type="email" name="email"><br><br>
    Senha:
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Registrar-se">

    </fieldset>
</form>

<?php

// Verifica se ocorreu alguma requisição
if (isset($_GET)) {
    foreach($_GET as $nomeCampo => $valorCampo) {

        echo ucfirst($nomeCampo) . " do usuário: " . $valorCampo . "<br><hr>";
    }
}

?>