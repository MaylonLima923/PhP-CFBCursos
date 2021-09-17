<?php
    include "../conecta.php";

    $res = mysqli_query($conn, "select * from tb_cadastro");
    $linhas = mysqli_num_rows($res);

    echo "Encontados $linhas registros na tabela tb_cadastro";

    mysqli_close($conn);
?>