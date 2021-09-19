<?php
    $arquivo = fopen("visitas.txt", "r");

    while (!feof($arquivo)) {
        echo fgets($arquivo, 4096);
        echo "<br>" . fgets($arquivo, 100);
        echo "<br><br>";
    }

    fclose($arquivo);

    echo "<a href='index.html'>Voltar</a>";
?>