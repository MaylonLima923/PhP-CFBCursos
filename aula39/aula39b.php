<?php
    if (isset($_COOKIE["numLogin"])) {
        $n1 = $_GET['num1'];
        $n2 = $_COOKIE["numLogin"];

        if ($n1 != $n2) {
            echo "Login não efetuado";
            exit;
        }
    } else {
        echo "Login não efetuado";
        exit;
    }
    include '../conecta.php';

    echo "Página inicial";

    mysqli_close($conn);
?>