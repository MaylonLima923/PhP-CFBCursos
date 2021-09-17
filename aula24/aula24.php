<?php
    class Carro {
        public $cor;
        public static $vel;

        public function __construct($cr) {
            $this->cor = $cr;
            self::$vel = 0;
        }

        public function status() {
            echo "<hr>";
            echo "Cor: " . $this->cor;
            echo "<br> Velocidade: " . self::$vel;
            echo "<hr>";
        }

        public function mudaVel($vl) {
            self::$vel = $vl;
        }
    }

    $car1 = new Carro("Vermelho");
    $car2 = new Carro("Verde");
    $car3 = new Carro("Azul");
    $car1->status();
    $car2->status();
    $car3->status();

    echo "<h2>Velocidade alterada</h2>";

    $car1->mudaVel(150);
    $car1->status();
    $car2->status();
    $car3->status();
?>