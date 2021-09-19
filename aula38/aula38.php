<?php
    include '../conecta.php';

    $sql = "UPDATE tb_cadastro SET telefone='3125' WHERE cod = 6";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Registro alterado com sucesso";
    } else {
        echo "Erro na alteração do registro";
    }

    mysqli_close($conn);
?>