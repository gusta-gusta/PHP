<?php
    require_once 'mamifero.php';
    require_once 'animal.php';
    Class Canguru extends Mamifero {
        public function usarBolsa() {
            echo '<p>Estou usando a Bolsa....</p>';
        }
#metodos extends
        public function Locomover(){
            echo "<p>Pulando...</p>";
        }
        public function Alimentar(){
            echo "<p>Comendo....</p>";
        }
        public function Emitir_Som(){
            echo "<p>Som de Canguru Perneta!</p>";
        }

    }
?>