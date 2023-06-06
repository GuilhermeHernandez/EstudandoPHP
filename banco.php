<?php

function mostrarMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$listaContas = [
    '123.456.789.01' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],

    '123.456.789.02' => [
        'titular' => 'Ingrid',
        'saldo' => 1000
    ],

    '123.456.789.03' => [
        'titular' => 'Luana',
        'saldo' => 1000
    ]
];

foreach ($listaContas as $cpf => $conta){
    mostrarMensagem("CPF:" . $cpf . " - Nome:" . $conta['titular']);
}