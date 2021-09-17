<?php
// Comando para iniciar sessão
session_start();

$_SESSION['vnome'] = "Maylon";
$_SESSION['vtexto'] = "Texto";

echo $_SESSION['vnome'];
echo "<br>".$_SESSION['vtexto'];

// unset($_SESSION['vtexto']);

// comando para finalizar sessão
// session_destroy();

if (isset($_SESSION['vcanal'])) {
    echo "<br>".$_SESSION['vcanal'];
} else {
    echo "<br> Váriavel vcanal inexistente";
}
?>

<html>
    <head> 
        <title> Aula 19 Curso de PHP </title>
    </head>

    <body>
        <br>
       <a href="pg1.php">PG1</a>
       <a href="pg2.php">PG2</a>
    </body>
</html>