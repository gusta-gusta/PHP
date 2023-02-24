<?php
    require_once 'animal.php';
    class Reptil extends Animal {
        private $corEscama;
# gets e sets
        function getCorEscama() {
            return $this->corEscama;
        }
        function setCorEscama(){
            $this->$corEscama = $corEscama;
        }
#metodos
        public function Locomover() {
            echo "<p>Rastejando....</p>";
        }
        public function Alimentar() {
            echo "<p> Comendo... </p>";
        }
        public function Emitir_Som() {
            echo "<p> Som de Réptil .... </p>";
        }
    }