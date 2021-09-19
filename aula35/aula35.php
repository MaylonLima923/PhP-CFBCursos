<?php
    include '../conecta.php';

    $sql = "DELETE FROM tb_cadastro WHERE cod = '3'"; 
    
    mysqli_query($conn, $sql);
    $linhas = mysqli_affected_rows($conn);

    if ($linhas > 0) {
        echo "Registro deletado";
    } else {
        echo "Nenhum registro deletado";
    }

    mysqli_close($conn);
?>