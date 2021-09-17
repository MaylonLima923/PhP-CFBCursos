<?php
    include '../conecta.php';

    $vcod = $_POST['F_Cod'];
    $vproduto = $_POST['F_Prod'];
    $vpreco = $_POST['F_Preco'];
    $vqtd = $_POST['F_Qtd'];

    $sql = "INSERT INTO tb_produtos VALUES ('$vcod', '$vproduto', $vpreco, $vqtd)";
    mysqli_query($conn, $sql);

    $linhas = mysqli_affected_rows($conn);
    if ($linhas == 1) {
        echo "Registro gravado com sucesso.";
    } else {
        echo "Erro, por favor verifique se os dados estão corretos e tente novamente!";
    }

    mysqli_close($conn);

    echo "<br> <a href='aula31.html'>Voltar</a>";
?>