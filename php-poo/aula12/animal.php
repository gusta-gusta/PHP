<?php

abstract class Animal {
    # Atributos
    protected $peso;
    protected $idade;
    protected $membros;
   
#Gets e Sets
     function getPeso() {
    return $this->nome;
    }
     function setPeso($peso) {
    $this->peso = $peso;
    }
     function getIdade() {
    return $this->idade;
    }
     function setIdade($idade) {
    $this->idade = $idade;
    }
     function getMembros() {
    return $this->membros;
    }
      function setMembros($membros){
            $this->membros = $membros;
    }
# Metodos
    abstract function Locomover(); 
    abstract function Alimentar();
    abstract function Emitir_Som(); 
    } 
?>