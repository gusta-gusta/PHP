<?php
    require_once 'animal.php';
    class Mamifero extends Animal {
        public $corPelo;
# Gets e Sets
        function getCorPelo() {
            return $this->corPelo;
        }
         function setCorPelo($corPelo) { 
            $this->$corPelo = $corPelo;
        }
# Metodos
        public function Locomover() {
            echo "<p>Correndo !!!!</p>";
        }
        public function Alimentar() {
            echo "<p>Mamando</p>";
        }
        public function Emitir_Som() {
            echo "<p>Som de Mamifero</p>";
        }


    }

?>