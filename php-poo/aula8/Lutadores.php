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
   function getNome() {
    return $this->nome;
  }
   function getNacionalidade() {
    return $this->nacionalidade;
  }
   function getIdade() {
    return $this->idade;
  }
   function getAltura() {
    return $this->altura;
  }
   function getPeso() {
    return $this->peso;
  }
   function getCategoria() {
    return $this->categoria;
  }
   function getVitorias() {
    return $this->vitorias;
  }
   function getDerrotas() {
    return $this->derrotas;
  }
   function getEmpates() {
    return $this->empates;
  }
//---------------------------------------------------- 
// Setters
   
   function setNome($nome) {
    $this->nome = $nome;
  }
   function setNacionalidade($nacionalidade) {
    $this->nacionalidade = $nacionalidade;
  }
   function setIdade($idade) {
    $this->idade = $idade;
  }
   function setAltura($altura) {
    $this->altura = $altura;
  }
   function setPeso($pe) {
    $this->peso = $pe;
    $this->setCategoria();
  }
   function setCategoria() {
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
   function setVitorias($vit) {
    $this->vitorias = $this->getVitorias() + $vit;
  }
   function setDerrotas($der) {
    $this->derrotas = $this->getDerrotas() + $der;
  }
   function setEmpates($emp) {
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