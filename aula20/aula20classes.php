<?php
    class Carro {
        var $tipo; // 1 = passeio / 2 = esporte / 3 = utilitario
        var $velMax;
        var $nome;
        var $liga;
        var $vel;

        function __construct($tp, $no) {
            $this -> tipo = $tp;
            $this -> liga = false;
            $this -> nome = $no;
            $this -> vel = 0;

            if ($tp == 1) {
                $this->velMax = 160;
            } else if ($tp == 2) {
                $this->velMax = 300;
            } else {
                $this->velMax = 100;
            }
        }

        function ligar() {
            $this->liga = true;
        }

        function desligar() {
            $this->liga = false;
        }

        function velocidade($vl) {
            if($vl > $this->velMax) {
                $this->vel = $this->velMax;
            } else {
                $this->vel = $vl;
            }
        }

        function id() {
            echo "<br>";
            echo "Nome do carro: " . $this->nome;
            echo "<br> Tipo do Carro " . $this->tipo;
            echo "<br> Velocidade Máxima: " . $this->velMax;

            if ($this->liga) {
                echo "<br> Carro ligado";
            } else {
                echo "<br> Carro desligado";
            }
        }

        function velAtual() {
            echo "<br> Velocidade Atual: " . $this -> vel;
        }
    }
?>

<html>
    <head> 
        <title> Aula 20 Curso de PHP - Classes</title>
    </head>

    <body></body>
</html>