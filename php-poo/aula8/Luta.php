<?php

    require_once 'Lutadores.php';
    Class Luta {

        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

// Getters
        private function getDesafiado(){
            return $this->desafiado;
        }
        private function getDesafiante() {
            return $this->desafiante;
        }
        private function getRounds() {
            return $this->rounds;
        }
        private function getAprovada() {
            return $this->aprovada;
        }

// Setters
        private function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        private function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }
        private function setRounds($rounds) {
            $this->rounds = $rounds;
        }
        private function setAprovada($aprovada) {
            $this->aprovada = $aprovada;
        }
// 

        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        public function lutar() {
            if ($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: #Empate
                        echo "<p><h2>Empate</h2></p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: # desafiado ganhar
                        echo "<p><h2>". $this->desafiado->getNome()." Venceu!!!!</h2></p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: #desafiante ganhar
                        echo "<p><h2>" . $this->desafiante->getNome()." Venceu!!!!</h2></p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                    
                }
            } else {
                echo "Luta não pode acontecer";
            }

        }
    



    }


?>
