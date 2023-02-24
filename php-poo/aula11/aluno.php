<?php
  require_once 'pessoa.php';
  
  class Aluno extends Pessoa {
    private $matricula;
    private $curso;

            function getCurso() {
                return $this->curso;
              }
               function setCurso($curso) {
                $this->curso = $curso;
              }
              function getMensalidade() {
                return $this->mensalidade;
              }
               function setMensalidade($mensalidade) {
                $this->mensalidade = $mensalidade;
              }

       


        public function Matricula() {
            echo "<p>" . $this->getNome() . " está Matriculado </p>";
        }

        public function Cursando() {
            echo "<p>" . $this->getNome() . " está Cursando: " . $this->getCurso() . "</p>";

        }

        public function pagarMensalidade() {
            echo "<p> O Aluno : " . $this->getNome() . " está pagando a mensalidade de :" . $this->getMensalidade() . "</p>";
        }
    }
  
 ?>