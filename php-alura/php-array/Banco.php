<?php
require_once 'FuncoesArray.php';
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'vinicius',
        'saldo' => 1000
    ],

    '413.958.908-62' => [
        'titular' => 'gustavo',
        'saldo' => 4100
    ]
];
# FUNÇÃO DE SACAR VALOR $
function Sacar($conta, $Valor_A_Sacar){
    if ($Valor_A_Sacar > $conta['saldo']){
        ExibirMensagem('Você não Pode Sacar valores acima do seu limite!');
   }else{
    $conta['saldo'] -= $Valor_A_Sacar;
   }
   return $conta;
}

# FUNÇÃO DE DEPOSITAR VALOR $
function Depositar(array $conta, float $valorADepositar){
    if ($valorADepositar <= 0){
        echo ExibirMensagem('Não pode depositar este valor! R$ ' . $valorADepositar);
        return $conta;
    }
    else{
    $conta['saldo'] +=  $valorADepositar;
    return $conta;
}}



# SACANDO E DEPOSITANDO
$contasCorrentes['123.456.789-10'] = Sacar($contasCorrentes['123.456.789-10'], 375);
$contasCorrentes['413.958.908-62'] = Sacar($contasCorrentes['413.958.908-62'], 100);
$contasCorrentes['413.958.908-62'] = Depositar($contasCorrentes['413.958.908-62'], -1);
$contasCorrentes['413.958.908-62'] = Depositar($contasCorrentes['413.958.908-62'], 5);

# VERIFICANDO CONTA APOS SAQUE / DEPOSITO
foreach ($contasCorrentes as $cpf => $conta) {
    ExibirMensagem($cpf .  " " . $conta['titular'] . ' ' . $conta['saldo']);

}

                                                                   
 foreach ($contasCorrentes as $cpf => $conta) {
    ExibirMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}                                                                 


#FUNÇÃO REFERENCIA LETRAS MAIUSCULA
function LetrasMaiuscula(&$conta){

    $conta['titular'] = strtoupper($conta['titular']);
    echo $conta['titular'];

   
}
#EXEMPLO DE PASSAGEM POR REFERENCIA 
ExibirMensagem(LetrasMaiuscula($contasCorrentes['413.958.908-62']));

#AQUI A REFERENCIA JÁ ESTÁ APLICADA *FORA* DA FUNÇÃO!

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    ExibirMensagem("$cpf $titular $saldo");

}
