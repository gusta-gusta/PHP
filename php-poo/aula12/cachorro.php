<?php
    require_once 'mamifero.php';
    Class Cachorro extends Mamifero {
        public function Enterrar_Osso() {
            echo '<p>Estou enterrando Osso....</p>';
        }
        public function abanarRabo() {
            echo '<p>Estou abanando o Rabo....</p>';
        }
#metodos extends
        public function Locomover(){
            echo "<p>Correndo...</p>";
        }
        public function Alimentar(){
            echo "<p>Comendo Ração....</p>";
        }
        public function Emitir_Som(){
            echo "<p>Auuu Auuuuu !</p>";
        }

    }
?>