<?php

$aantal_vrienden = readline("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL);
if (!is_numeric($aantal_vrienden)) {
    exit('Input is geen getal.');
}


$dromen_vrienden = array();

for ($i = 0; $i < $aantal_vrienden; $i++) {
    $naam = readline("Wat is jouw naam?" . PHP_EOL);
    $aantal_dromen = readline("Hoeveel dromen ga je opgeven?" . PHP_EOL);
    $dromen = array();
    for ($j = 0; $j < $aantal_dromen; $j++) {
        $droom = readline("Wat is jouw droom?" . PHP_EOL);
        $dromen[] = $droom;
    }
    $dromen_vrienden[$naam] = $dromen;
}

foreach ($dromen_vrienden as $vriend => $dromen) {
    foreach ($dromen as $droom) {
        echo $vriend . " heeft dit als droom: " . $droom . PHP_EOL;
    }
}