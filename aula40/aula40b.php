<?php
    session_start();

    if (isset($_SESSION['numLogin'])) {
        $n1 = $_GET['num1'];
        $n2 = $_SESSION["numLogin"];

        if ($n1 != $n2) {
            echo "Login não efetuado";
            exit;
        }
    } else {
        echo "Login não efetuado";
        exit;
    }
    include '../conecta.php';

    echo "Página inicial ";
    echo "Bem vindo, " . $_SESSION['username'];

    // Duas formas de eliminar as váriaveis da sessão
    // unset($_SESSION['numLogin']);
    // session_unregister('numLogin');

    // Apagar todas as váriáveis de uma vez
    $_SESSION = array();
    session_destroy();

    mysqli_close($conn);
?>