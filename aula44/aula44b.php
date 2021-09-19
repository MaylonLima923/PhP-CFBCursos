<?php
    include '../conecta.php';

    $vnome = $_GET['fnome'];
    $vuf = $_GET['fuf'];
    $vt_tmp = array(0, 0, 0, 0);

    echo "Nome: $vnome - Estado: $vuf <br>";
    echo "Transportes selecionados: <br>";

    foreach ($_GET['ftransp'] as $tra) {
        $vt_tmp[$tra-1] = 1;
        
        echo "$tra";
    }

    echo "<hr>";

    $sql = "INSERT INTO pesquisa VALUES (NULL, '$vnome', '$vuf', $vt_tmp[0], $vt_tmp[1], $vt_tmp[2], $vt_tmp[3]";
    $res = mysqli_query($conn, $sql);

    echo "Pesquisa gravada";

    mysqli_close($conn);
?>