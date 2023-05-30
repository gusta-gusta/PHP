<?php 


function geraEmail(string $nome): void
{

    
    // FINAL DEMILITA A QUEBRA DE LINHA
    // Herodoc -> FINAL SEM É IGUAL ASPAS DUPLAS
    // Nowdoc -> FINAL COM ASPAS SIMPLES 
    $conteudoEmail =  <<<FINAL
    
    "Olá $nome!

       Estamos entrando em contato para

    motivo do contato

    assinatura";

    FINAL;   

    echo $conteudoEmail;

}


geraEmail('Gustavo Sales');