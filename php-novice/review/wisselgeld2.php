<?php

define("EURO", [50,20,10,5,2,1]);
define("CENT", [0.5,0.2,0.1,0.05]);

$wisselgeld = $argv[1];

try {
    if ($argv[1] !== 0 && count($argv) < 2) {
        throw new Exception("Verkeerd aantal argmumenten. Roep de applicatie aan op de volgende manier: 'wisselgeld.php <bedrag>'");
    }
    if ($wisselgeld < 0) {
        throw new Exception("Input moet een positief getal zijn");
    }
    if (!is_numeric($wisselgeld)) { 
        throw new Exception("Input moet een valide getal zijn");
    } 
} catch (Exception $ex) {   
    echo "Error opgevangen: " . $ex->getMessage() . PHP_EOL;
}

function geen($x) 
{
    if ($x == "0") {
        echo "Geen wisselgeld" . PHP_EOL;
    }
}

function afronden($x)
{
    if (!is_numeric($x)) {
        exit;
    }
    return round($x / 0.05) * 0.05;
}

function wisselen($x)
{
    foreach (EURO as $eenheid) {
        if ($x >= $eenheid) {
            $aantal = floor($x / $eenheid);
            $x = round(fmod($x, $eenheid), 2);
            echo $aantal . " x " . $eenheid . " euro " . PHP_EOL; 
        } 
    }
    foreach (CENT as $eenheid) {
        if ($x >= $eenheid) {
            $aantal = floor($x / $eenheid);   
            $x = round(fmod($x, $eenheid), 2);
            echo $aantal . " x " . ($eenheid * 100) . " cent " . PHP_EOL;
        }
    }
}

geen($wisselgeld);
wisselen(afronden($wisselgeld));