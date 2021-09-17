<?php
    // Se colocado em uma classe, não permite a classe ser herdada
    abstract class CarroBasse {
        public $cor;
        public $vel = 0;

        public function __construct($cr) {
            $this->cor = $cr;
        }

        public function status() {
            echo "<hr>";
            echo "Cor: " . $this->cor;
            echo "<br> Velocidade: " . $this->vel;
            echo "<hr>";
        }

        // A palavra final não permite sobre-escrever um método
        final public function Cor() {
            echo "<br> Minha cor: " . $this->cor;
            echo "<br> Método original";
        }
    }

    class Carro extends CarroBasse {
        /*
        public function Cor() {
            echo "<br> Cor: " . $this->cor;
        }
        */
    }

    class Transp extends CarroBasse {}

    $car1 = new Carro("Vermelho");
    $car2 = new Transp("Azul");

    $car1->Cor();
    echo "<hr>";
    $car2->Cor();

?>