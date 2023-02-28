<?php
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    '413.958.908-62' => [
        'titular' => 'Gustavo',
        'saldo' => 4100
    ]
];

function Sacar($Conta, $Valor_A_Sacar){
    if ($Valor_A_Sacar > $Conta['saldo']){
        ExibirMensagem('Você não Pode Sacar valores acima do seu limite!');
   }else{
    $conta['saldo'] -= $Valor_A_Sacar;
   }

}
#
    function ExibirMensagem($mensagem){
    echo $mensagem . PHP_EOL;
    }



foreach ($contasCorrentes as $cpf => $conta) {
    ExibirMensagem($cpf .  " " . $conta['titular'] . ' ' . $conta['saldo']);

}

$contasCorrentes['123.456.789-10'] = Sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['413.958.908-62'] = Sacar($contasCorrentes['413.958.908-62'], 500);


