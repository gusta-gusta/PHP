<?php
require_once 'people.php';

class Funcionario{
    private $setor;
    private $trabalhando;

    function getSetor() {
        return $this->setor;
      }
       function setSetor($setor) {
        $this->setor = $setor;
      }
      function getTrabalhando() {
        return $this->trabalhando;
      }
       function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
      }
      public function MudarTrabalho() {
        $this->trabalhando = ! $this->trabalhando;
      }
}
?>