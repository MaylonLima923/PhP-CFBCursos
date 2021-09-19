<?php
    include '../conecta.php';

    $user = $_POST['f_user'];
    $senha = $_POST['f_senha'];

    $sql = "SELECT * FROM tb_cadastro WHERE username = '$user' AND senha = '$senha'";
    $res = mysqli_query($conn, $sql);
    $linhas = mysqli_affected_rows($conn);

    if ($linhas > 0) {
        // A função rand() gera um número aleatório
        $num = rand(100000, 900000);
        // A função setcookie() cria um cookie, se o cookie já exister ela apaga
        setcookie("numLogin", $num);
        // A função header() chama um novo arquivo
        header("Location:aula39b.php?num1=$num");
    } else {
        echo "Erro no login, tente novamente! <br>";
        echo "<a href='aula39.html'>Tentar novamente</a>";
    }

    mysqli_close($conn);
?>