<?php
    // r = Abre p/ leitura, ponteiro no inicio
    // r+ = Abre p/ leitura e escrita
    // w = Abre p/ escrita, ponteiro no inicio, se o arquivo não existir ele cria
    // w+ = Abre p/ escrita e escrita
    // a = Abre p/ escrita, ponteiro no final, se o arquivo não existir ele cria
    // a+ = Abre p/ escrita e escrita
    // x = Abre p/ escrita, ponteiro no inicio, se o arquivo já existir ele gera um erro E_WARNING
    // x+ = Abre p/ escrita e escrita

    $arquivo = fopen("aula.txt", "a");
    fwrite($arquivo, "\r\n Curso de PhP");

    $arquivo = fopen("aula.txt", "r");
    $conteudo = fread($arquivo, 100);

    echo $conteudo;

    fclose($arquivo);
?>