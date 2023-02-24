<?php
class Caneta {
     private $modelo;
     private $cor;
     private $ponta;
     private $tampada;


     
    public function __construct ($m, $c, $p) {  // Método Construtor
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar();
    }

    public function tampar() {        // Tampar
            $this->tampada = true;
    }
    public function destampar() {       // Destampar
            $this->tampada = false;
    }


//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     public function getModelo() {   // get modelo
            return $this->modelo;
     }
     public function setModelo($m){  // set modelo
            $this->modelo = $m; 
     }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     public function getCor(){      // get cor
            return $this->cor;
     }
     public function setCor($c){    //set cor
            $this-> cor = $c;
     }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     public function getPonta(){    //get ponta
            return $this->ponta;
     }
     public function setPonta($p){  //set ponta
            $this->ponta = $p;
     }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------     
}