<?php 

$peso = 74;
$altura = 1.71;

$imc =  $peso / ($altura * $altura) ;

echo "IMC: ";

if ($imc < 18.5){
    echo "Magreza" . PHP_EOL;
}

elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Normal" . PHP_EOL;
}

elseif ($imc = 25.0 && $imc <= 29.9){
    echo "Sobrepeso" . PHP_EOL;
}

elseif ($imc = 30.0 && $imc <= 39.9){
    echo "Obesidade" . PHP_EOL;
}

elseif ($imc > 40){
    echo "Obesidade Grave" . PHP_EOL;
}