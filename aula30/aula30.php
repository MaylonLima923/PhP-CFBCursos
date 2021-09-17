<?php
    include "../conecta.php";

    $vnome = "Maylon";
    $vusername = "Maylin";
    $vsenha = "123";
    $vemail = "maylon@maylon.com";
    $vtelefone = "11934378194";
    $vtipo_acesso = 1;
    $vobs = "Tudo ok";

    // Inserir valores na tabela
    $sql = "insert into tb_cadastro values (null, '$vnome', '$vusername', '$vsenha', '$vemail', '$vtelefone', $vtipo_acesso, '$vobs')";

    $res = mysqli_query($conn, $sql);

    $linhas = mysqli_affected_rows($conn);

    echo $linhas;

    mysqli_close($conn);
?>