<?php
    include '../conecta.php';

    $user = $_POST['f_user'];
    $senha = $_POST['f_senha'];

    $sql = "SELECT * FROM tb_cadastro WHERE username = '$user' AND senha = '$senha'";
    $res = mysqli_query($conn, $sql);
    $linhas = mysqli_affected_rows($conn);

    if ($linhas > 0) {
        $num = rand(100000, 900000);
        
        session_start();
        $_SESSION['numLogin'] = $num;
        $_SESSION['username'] = $user;

        header("Location:aula40b.php?num1=$num");
    } else {
        echo "Erro no login, tente novamente! <br>";
        echo "<a href='aula40.html'>Tentar novamente</a>";
    }

    mysqli_close($conn);
?>