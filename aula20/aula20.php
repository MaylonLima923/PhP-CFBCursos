<?php
    include "aula20classes.php";

    $carro1 = new Carro(2, "Rapid");
    $carro2 = new Carro(3, "Sedan");

    $carro1 -> id();
    $carro1 -> velAtual();
    echo "<hr>";
    $carro2 -> ligar();
    $carro2 -> velocidade(60);
    $carro2 -> id();
    $carro2 -> velAtual();

?>

<html>
    <head> 
        <title> Aula 20 Curso de PHP - Main</title>
    </head>

    <body></body>
</html>