<?php

class caneta{  
/*/
    Public / Private / Protected - Niveis das variaveis 
/*/
    public       $modelo;
    public       $cor;
    private      $ponta;
    protected    $carga;
    protected    $tampada;
}
    function rabiscar(){ 
        if ($this->tampada == true) { 
            echo "<p> Estou tampada! não posso rabiscar!</p>";
        }else{
        echo "<h3><p>Estou rabiscando...</p></h3>";      
    }
    }
    public function tampar() {   //metodo publico da permissão para a variavel protegida
        $this->tampada = true;
    }

    public function destampar() { 
        $this->tampada = false; 
    }






?>