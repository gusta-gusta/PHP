<?php

class caneta{     // Criar classe caneta
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){ // metodo
        if ($this->tampada == true) { //Tampada não rabisca
            echo "<p> Estou tampada! não posso rabiscar!</p>";
        }else{
            if ($this->ponta >= 0.5 &&$this->ponta < 1) { //ponta entre 0.5 e 1
        echo "<h3><p>Estou rabiscando...</p></h3>";
        }else{
            if ($this->ponta >= 1){ //ponta de 1 para cima
        echo "<h2><p>Estou rabiscando...</p></h2>";
    }else{
        echo "<p>Estou rabiscando...</p>";
    }
}
}
    }
    function tampar() { // metodo
        $this->tampada = true; //$this é o valor do objeto chamado, precisa estar definido
    }

    function destampar() { // metodo
        $this->tampada = false; //$this é o valor do objeto chamado, precisa estar definido
    }
}





?>