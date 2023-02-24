<?php

  class Pessoa{
    private $nome;
    private $idade;
    private $sexo;


    
     function getNome() {
      return $this->nome;
    }
     function getIdade() {
      return $this->idade;
    }
     function getSexo() {
      return $this->sexo;
    }
     function setNome($nome) {
      $this->nome = $nome;
    }
     function setIdade($idade) {
      $this->idade = $idade;
    }
     function setSexo($sexo) {
      $this->sexo = $sexo;
    }

    public function Aniversario() {
      $this->setIdade($this->getIdade() + 1);
      echo $this->getNome() . " fez aniversário agora tem " . $this->getIdade() . " anos de idade. Parabéns.";
    }
  }
 ?>