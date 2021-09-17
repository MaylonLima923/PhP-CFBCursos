<?php
    include "login.php";

    $user = isset($_GET["usuario"])?$_GET["usuario"]:"admin";
    $senha = isset($_GET["senha"])?$_GET["senha"]:"1234";

    $loga = new Login($user, $senha);

    $loga -> logar();
?>