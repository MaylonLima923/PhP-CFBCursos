<?php
    $vmail = isset($_POST['email_txt'])?$_POST['email_txt']:"example@example.com";
    $vassunto = isset($_POST['assunto_txt'])?$_POST['assunto_txt']:"example";
    $vmsg = isset($_POST['msg_txt'])?$_POST['msg_txt']:"Mensagem de exemplo";

    if (mail($vmail, $vassunto, $vmsg)) {
        echo "Email enviado";
    } else {
        echo "Erro ao enviar email, tente novamente!";
    }
?>