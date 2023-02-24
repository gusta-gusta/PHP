<?php
require_once 'people.php';

class Professor{

    private $especialidade;
    private $salario;

    function getespecialidade() {
        return $this->especialidade;
      }
       function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
      }     function getSalario() {
        return $this->salario;
      }
       function setSalario($salario) {
        $this->salario = $salario;
      }
      public function Aumento($aum){
        $this->salario = $this->salario + $aum;
      }
}