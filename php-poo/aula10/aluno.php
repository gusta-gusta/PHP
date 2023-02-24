<?php
require_once 'people.php';

class Aluno{
    private $matricula;
    private $curso;

    function getMatricula() {
        return $this->matricula;
      }
       function setMatricula($matricula) {
        $this->matricula = $matricula;
      }
      function getCurso() {
        return $this->curso;
      }
       function setCurso($curso) {
        $this->curso = $curso;
      }

      public function CancelarMatric() {
        echo "A Matricula foi cancelada com sucesso.";
    }
        public function PagarMatricula() {
            echo "A matricula foi paga";
        }



}
?>