<?php
    class aula {
        // Declaração com private só podem ser acessadas por dentro da classe, ou seja, nem mesmo
        // uma classe filha vai ter acesso
        private $var1 = "Bom dia";
        // Declarações com privates podem ser acessadas tanto pela classe, quanto por classes filhas
        protected $var2 = "CFB Cursos";
        // declarações public ou var podem ser acessador por qualquer forma
        public $var3 = "www.cfbcursos.com";

        function escreve() {
            echo "Método da classe Aula";
            echo "<br>". $this->var1;
            echo "<br>". $this->var2;
            echo "<br>". $this->var3;
        }
    }

    class canal extends aula {
        var $vc1 = "Curso de PhP";
        var $vc2 = "Bruno";

        function escreve2() {
            echo "<br> Método da classe canal";
            echo "<br>". $this->vc1;
            echo "<br>". $this->vc2;
            echo "<hr>";
            echo "<br>" . $this->var2;
            echo "<br>" . $this->var1;
        }
    }

    $aulaObj = new aula();
    $canalObj = new canal();

    $aulaObj->escreve();
    echo "<hr>";
    // $canalObj->escreve();
    $canalObj->escreve2();
    // echo "<br>" . $aulaObj->var1;
    // echo "<br>" . $aulaObj->var2;
    // echo "<br>" . $aulaObj->var3;
?>