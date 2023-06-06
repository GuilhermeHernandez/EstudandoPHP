<?php 

## Lista de idade 
    #- Podemos acessar via index

$listaIdade = [11,21,20,17,19,52,35];

#Adicionando um numero no ultimo elemento
$listaIdade[count($listaIdade)] = 20;

# Podemos adicionar assim tbm 
$listaIdade[] = 1533;

foreach($listaIdade as $idade){
    echo $idade . PHP_EOL;
}