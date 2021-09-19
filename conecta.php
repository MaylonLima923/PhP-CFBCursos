<?php
    // Cria a conexão
    $conn = mysqli_connect("localhost:3306", "usuario", "senha");
    // Usa a database
    mysqli_select_db($conn, "canalcfb");
?>