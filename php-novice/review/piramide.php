<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;
$u = readline();

if (!is_numeric($u)) {
    exit;
}
    
for ($i = 0; $i < $u; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*" ;
    }
    echo PHP_EOL;
}