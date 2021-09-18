<?php
    include '../conecta.php';

    $vcod = $_POST['F_Cod'];

    $sql = "SELECT * FROM tb_produtos WHERE cod = '$vcod'";
    $res = mysqli_query($conn, $sql);

    while ($vreg = mysqli_fetch_row($res)) {
        $vcod = $vreg[0];
        $vprod = $vreg[1];
        $vpreco = $vreg[2];
        $vqtd = $vreg[3];

        echo "O código do produto é: $vcod <br>";
        echo "O nome do produto é: $vprod <br>";
        echo "O preço do produto é: $vpreco <br>";
        echo "Temos $vqtd no estoque <br>";
        echo "<hr>";
    }

    mysqli_close($conn);
?>