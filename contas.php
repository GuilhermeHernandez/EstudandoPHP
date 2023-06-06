<?php

$conta1 = [
    'titular' => 'Guilherme',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Ind',
    'saldo' => 1000000
];

$contaCorrente = [$conta1,$conta2,$conta3];

for ($i = 0 ; $i < count($contaCorrente) ; $i++){
    echo $contaCorrente[$i]['titular'] . PHP_EOL;
}