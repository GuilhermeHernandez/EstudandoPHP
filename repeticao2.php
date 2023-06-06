<?php

for($contador = 1 ; $contador <= 15 ; $contador ++){

    if ($contador == 13) {
        continue;
    }

    if ($contador == 14) {
        break;
    }
    
    echo "#$contador" . PHP_EOL;
}