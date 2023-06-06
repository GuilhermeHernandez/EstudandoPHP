<?php

$array = [
    1 => 'a',
    '1' => 'b',
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}