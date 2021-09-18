<?php
    include "../conecta.php";

    $vcod1 = $_POST['F_Cod1'];
    $vcod2 = $_POST['F_Cod2'];
    $sql = "SELECT * FROM tb_produtos WHERE cod = '$vcod1' OR cod = '$vcod2'";
    $res = mysqli_query($conn, $sql);
    $linhas = mysqli_num_rows($res);

    echo "$linhas registros encontrados";

    mysqli_close($conn);
?>