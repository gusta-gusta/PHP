<?php
    require_once 'animal.php';
    class Peixe extends Animal {
        private $corEscama;
# gets e sets
        function getCorEscama() {
            return $this->corEscama;
        }
        function setCorEscama(){
            $this->$corEscama = $corEscama;
        }
#metodos internos
        public function SoltarBolha() {
            echo "Soltando Bolhas...";
        }

#metodos extends
        public function Locomover() {
            echo "<p>Nadando....</p>";
        }
        public function Alimentar() {
            echo "<p> Comendo... </p>";
        }
        public function Emitir_Som() {
            echo "<p> Som de Peixe xD xD xD .... </p>";
        }
    }