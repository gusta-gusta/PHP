<?php

require_once 'pessoa.php';
require_once 'aluno.php';

class Bolsista extends Aluno {

    private $bolsa;

    function getBolsa(){
       return $this->bolsa;
    }
    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "<p> Bolsa Renovada com Sucesso! </p>";
    }

    public function pagarMensalidade() {
        echo "<p> O Aluno : " . $this->getNome() . " está pagando a mensalidade de :" . $this->getMensalidade() . "</p>";
    }
      
    

}


?>
