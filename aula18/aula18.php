<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 18 php</title>
</head>
<body>
    <?php 
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Roberto";

        echo "Bem vindo, $nome";
    ?>
</body>
</html>