<?php
    interface CarroPadrao {
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }

    interface CarroGuerra {
        function atiraCanhao();
        function atiraMetralhadora();
    }

    abstract class CarroBase implements CarroPadrao, CarroGuerra {
        public $potencia;
        public $velMax;
        private $ligado;

        public function liga() {
            $this->ligado = true;
        }

        public function desliga() {
            $this->ligado = false;
        }

        public function status() {
            echo "<br> Potência: " . $this->potencia;
            echo "<br> Velocidade Máxima: " . $this->velMax;
            if ($this->ligado) {
                echo "<br> Carro ligado";
            } else {
                echo "<br> Carro desligado";
            }
            echo "<hr>";
        }

        public function acelera() {}

        public function freia() {}

        public function atiraCanhao() {}

        public function atiraMetralhadora() {}
    }

    class Carro extends CarroBase {
        public function __construct($pt, $vm) {
            $this->potencia = $pt;
            $this->velMax = $vm;

            $this->status();
        }
    }

    $car1 = new Carro(100, 200);
    $car1->liga();
    $car1->status();
?>