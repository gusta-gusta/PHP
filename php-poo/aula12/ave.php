<?php
    require_once 'animal.php';
    class Ave extends Animal {
        private $corPena;
# gets e sets
        function getCorPena() {
            return $this->corPena;
        }
        function setCorPena(){
            $this->$corPena = $corPena;
        }
#metodos internos
        public function FazerNinho() {
            echo "Fazendo Ninho...";
        }


#metodos extends
        public function Locomover() {
            echo "<p>Voando....</p>";
        }
        public function Alimentar() {
            echo "<p> Comendo... </p>";
        }
        public function Emitir_Som() {
            echo "<p> Som de Ave PRU PRU .... </p>";
        }
    }