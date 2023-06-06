<?php 

for ($cont = 0 ; $cont <= 10 ; $cont++){
    
    $rest = $cont % 2;

    if ($rest == 1){
        echo $cont . PHP_EOL;
    }
}