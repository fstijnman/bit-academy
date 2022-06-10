<?php

$aantal = readline('Hoeveel vrienden zal ik vragen om hun droom?' . PHP_EOL);
if (!is_numeric($aantal)) {
    exit('Input is geen getal.');
}

$dromen = array();

for ($i = 0; $i < $aantal; $i++) {
    $naam = readline('Wat is jouw naam?' . PHP_EOL);
    $droom = readline('Wat is jouw droom?' . PHP_EOL);
    $dromen[$naam] = $droom;
}

foreach ($dromen as $x => $x_value) {
    echo $x . " heeft dit als droom: " . $x_value . PHP_EOL;
}
