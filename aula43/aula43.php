<?php
    $arquivo = fopen("contador.txt", "r");
    $cont = fread($arquivo, 21);
    $cont++;

    $arquivo = fopen("contador.txt", "w");
    fwrite($arquivo, $cont);

    fclose($arquivo);

    echo "Quantidade de acessos: $cont";
?>