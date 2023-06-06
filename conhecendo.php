<?php

$idade = 18;
$nome = "Guilherme";
$nmrPessoas = 1;

echo "Ola mundo !" . PHP_EOL;
echo "Me chamo $nome e tenho $idade anos !" . PHP_EOL;
echo "Voce pode entrar se tiver mais de 18 anos ..." . PHP_EOL;
echo "A partir de 16 anos voce pode entrar acompanhado !" . PHP_EOL;


if ($idade >= 18){
    echo "Voce tem $idade , voce pode entrar sozinho !";
} 

else if($idade >= 16 && $nmrPessoas > 1){
        echo "Voce tem $idade anos , está acompanhada e pode entrar !";
    }

else {
        echo "Voce so tem $idade anos , voce não pode entrar!";
    }
