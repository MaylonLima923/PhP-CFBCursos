<?php
    class Login {
        var $nome;
        var $senha;

        function __construct($nome, $senha) {
            $this -> nome = $nome;
            $this -> senha = $senha;
        }

        function logar() {
            if ($this -> nome == "Maylon" && $this -> senha == "123") {
                echo "Logado";
            } else {
                echo "Usuário ou senha errado";
            }
        }
    }
?>