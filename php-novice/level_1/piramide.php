<?php

$stapels = readline('Hoeveel stapels wil je hebben?' . PHP_EOL);
$n = "";
for ($i = 1; $i <= $stapels; $i++) {
    $n .= "*";
    echo $n;
    echo PHP_EOL;
}