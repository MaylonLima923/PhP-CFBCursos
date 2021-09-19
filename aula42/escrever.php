<?php
    $nome = $_POST['f_nome'];
    $msg = $_POST['f_msg'];
    $conteudo = $msg . "\r\n" . $nome . "\r\n";

    $arquivo = fopen("visitas.txt", "a");

    fwrite($arquivo, $conteudo);

    echo "Mensagem gravada: $conteudo";

    fclose($arquivo);

    echo "<a href='index.html'>Voltar</a>";
?>