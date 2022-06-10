<?php

define("EURO", [50,20,10,5,2,1]);
define("CENT", [0.5,0.2,0.1,0.05]);

$wisselgeld = $argv[1];

if (round(fmod($wisselgeld, CENT[3]), 2) == 0.01 || round(fmod($wisselgeld, CENT[3]), 2) == 0.02) {
    $wisselgeld = $wisselgeld -= round(fmod($wisselgeld, CENT[3]), 2);
} elseif (round(fmod($wisselgeld, CENT[3]), 2) == 0.03 || round(fmod($wisselgeld, CENT[3]), 2) == 0.04) {
    $wisselgeld = $wisselgeld += round(fmod($wisselgeld, CENT[3]), 2);
}

$restbedrag = $wisselgeld;
foreach (EURO as $eenheid) {
    if ($restbedrag >= $eenheid) {
        $aantal = floor($restbedrag / $eenheid);
        $restbedrag = round(fmod($restbedrag, $eenheid), 2);
        echo $aantal . " x " . $eenheid . " euro " . PHP_EOL; 
    } 
} 

foreach (CENT as $eenheid) {
    if ($restbedrag >= $eenheid) {
        $aantal = floor($restbedrag / $eenheid);   
        $restbedrag = round(fmod($restbedrag, $eenheid), 2);
        echo $aantal . " x " . ($eenheid * 100) . " cent " . PHP_EOL;
    }
}

if ($wisselgeld <= 0) {
    echo "Geen wisselgeld" . PHP_EOL;
}