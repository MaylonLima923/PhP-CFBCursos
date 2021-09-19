<?php
    include "../conecta.php";

    $vnome = $_GET['f_nome'];
    $vsenha = $_GET['f_senha'];
    $vsexo = $_GET['f_sexo'];
    $vesporte = $_GET['f_esporte'];
    $vtcarro = isset($_GET['f_tcarro'])?$_GET['f_tcarro']:0;
    $vtmoto = isset($_GET['f_tmoto'])?$_GET['f_tmoto']:0;
    $vtonibus = isset($_GET['f_tonibus'])?$_GET['f_tonibus']:0;
    $vcoment = $_GET['f_coment'];

    $sql = "INSERT INTO tb_revisao VALUES (NULL, '$vnome', '$vsenha', '$vsexo', '$vesporte', '$vtcarro', '$vtmoto', '$vtonibus', '$vcoment')";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_affected_rows($conn)) {
    echo "Registro realizado";
    } else {
        echo "Falha no registro";
    }
    echo "<br> <a href=aula45.html>Voltar</a>";

    mysqli_close($conn);
?>