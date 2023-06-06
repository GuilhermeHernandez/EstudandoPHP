<?php

$contasCorrentes = [
    01 => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],
    02 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    03 => [
        'titular' => 'Ind',
        'saldo' => 1000000
    ]
];

$contasCorrentes[04] = [
    'titular' => 'Lucca',
    'saldo' => 150
];

#PARACADA
foreach ($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}