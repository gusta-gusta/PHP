<?php

class Lutador {
  //Atributos
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria; #Peso leve, Peso Médio e Peso Pesado
  private $vitorias;
  private $derrotas;
  private $empates;

  // Metódo constutor
  public function __construct($nome, $nacionalidade, $idade, $altura, $pe, $vitorias, $derrotas, $empates) {
    $this->nome = $nome;
    $this->nacionalidade = $nacionalidade;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->setPeso($pe);
    $this->vitorias = $vitorias;
    $this->derrotas = $derrotas;
    $this->empates = $empates;
  }

//---------------------------------------------------- 
// Getters 
  private function getNome() {
    return $this->nome;
  }
  private function getNacionalidade() {
    return $this->nacionalidade;
  }
  private function getIdade() {
    return $this->idade;
  }
  private function getAltura() {
    return $this->altura;
  }
  private function getPeso() {
    return $this->peso;
  }
  private function getCategoria() {
    return $this->categoria;
  }
  private function getVitorias() {
    return $this->vitorias;
  }
  private function getDerrotas() {
    return $this->derrotas;
  }
  private function getEmpates() {
    return $this->empates;
  }
//---------------------------------------------------- 
// Setters
   
  private function setNome($nome) {
    $this->nome = $nome;
  }
  private function setNacionalidade($nacionalidade) {
    $this->nacionalidade = $nacionalidade;
  }
  private function setIdade($idade) {
    $this->idade = $idade;
  }
  private function setAltura($altura) {
    $this->altura = $altura;
  }
  private function setPeso($pe) {
    $this->peso = $pe;
    $this->setCategoria();
  }
  private function setCategoria() {
    if ($this->peso < 52.2) {
      $this->categoria = "Invalido";
    } elseif ($this->peso <= 70.3) {
      $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
      $this->categoria = "Médio";
    } elseif ($this->peso <= 120.2) {
      $this->categoria = "Pesado";
    } else {
      $this->categoria = "Invalido";
    }
  }
  private function setVitorias($vit) {
    $this->vitorias = $this->getVitorias() + $vit;
  }
  private function setDerrotas($der) {
    $this->derrotas = $this->getDerrotas() + $der;
  }
  private function setEmpates($emp) {
     $this->empates = $this->getEmpates + $emp;
  } 

//---------------------------------------------------- 
    // Métodos
    function apresentar() {
        echo "<p>------------------------------------</p>";
        echo "Lutador: " . $this->getNome();
        echo "<p>------------------------------------</p>";
        echo "De: " . $this->getNacionalidade();
        echo "<br>Tem: " . $this->getIdade() . " Anos";
        echo "<br>Pesando: ". $this->getPeso() . "Kg.";
        echo "<br>Ele tem " . $this->getVitorias() . " Vitórias! ";
        echo $this ->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates.";
    }
    function status() {
        echo "<p>------------------------------------</p>";
        echo "            Status";
        echo "<p>------------------------------------</p>";
        echo "<p>Nome: " . $this->getNome();
        echo "<p>Categoria: Peso " . $this->getCategoria();

    }
    function ganharLuta(){
        $this->vitorias = $this->getVitorias() +1;
    }
    function perderLuta(){
        $this->derrotas = $this->getDerrotas() +1;
    }
    function empatarLuta(){
        $this->empates = $this->getEmpates() +1;
    }
}


?>