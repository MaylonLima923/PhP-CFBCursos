<?php
// Classes abstratas são classes que não podem ser instanciadas
    abstract class CarroBase {
        public $potencia;
        public $velMax;
        public $portas;
        public $ligado = false;

        public function liga() {
            $this -> ligado = true;
        }

        public function desligar() {
            $this -> ligado = false;
        }

        public function status() {
            echo "<br> Potência: " . $this->potencia;
            echo "<br> Velocidade Máxima: " . $this->velMax;
            echo "<br> Portas: " . $this->portas;
            if ($this->ligado) {
                echo "<br> Carro ligado";
            } else {
                echo "<br> Carro desligado";
            }
            echo "<hr>";
        }
    }

    class Carro extends CarroBase {
        public function __construct($pt, $vm, $po) {
            $this->potencia = $pt;
            $this->velMax = $vm;
            $this->portas = $po;
            $this->status();
        }
    }

    $carro1 = new Carro(150, 300, 4);
    $carro2 = new Carro(200, 400, 2);
    $carro3 = new Carro(100, 200, 2);
    $carro4 = new Carro(50, 100, 4);
?>