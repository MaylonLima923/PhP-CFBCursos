<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 26 PhP</title>
</head>
<body>
    <form name="email" method="post" action="envia.php">
        <label>Email</label><br>
        <input type="text" name="email_txt">
        <br><br>

        <label>Assunto</label><br>
        <input type="text" name="assunto_txt">
        <br><br>

        <label>Mensagem</label><br>
        <textarea name="msg_txt" cols="30" rows="10"></textarea>
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>