<?php
    class Pessoa{
        #atributos
        private $nome;
        private $idade;
        private $sexo;
    

    function getNome() {
        return $this->nome;
      }
       function setNome($nome) {
        $this->nome = $nome;
      }
      function getIdade() {
        return $this->idade;
      }
      
       function setIdade($idade) {
        $this->idade = $idade;
      }
      function getsexo() {
        return $this->sexo;
      }
       function setSexo($sexo) {
        $this->sexo = $sexo;
      }

       function FazerAniversario() {
        $this->idade = $this->idade + 1;
        echo "Feliz Aniversario!!!!";
      }
}
?>
