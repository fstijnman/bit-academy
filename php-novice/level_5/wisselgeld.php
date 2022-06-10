<?php

define('GELDEENHEDEN', array(5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5));

function checkArguments($arguments) 
{
    if ($arguments == 1) {
        throw new Exception("Verkeerd aantal argumenten. Roep de applicatie aan op de volgende manier: `wisselgeld.php <bedrag>`" . PHP_EOL);
    }
    return true;
}

function checkChangeZero($geld)
{
    if ($geld == 0.0) {
        echo "Geen wisselgeld" . PHP_EOL;
        exit();
    }
    return true;
}

function checkChangeNegative($geld)
{
    if ($geld < 0.0) {
        throw new Exception("Input moet een positief getal zijn" . PHP_EOL);
    }
    return true;
}

function checkChangeNumber($geld)
{
    if (!is_numeric($geld)) {
        throw new Exception("Input moet een valide getal zijn" .  PHP_EOL);
    }
    return true;
}


function parseInput($input) 
{
    return floatval($input);
}


function convertChange($geld)
{
    $wisselgeld = (100 * $geld);
    $wisselgeld = round($wisselgeld) + 2;
    return $wisselgeld;   
}

function calculateChange($restbedrag)
{
    if (!$restbedrag) {
        exit("Geen wisselgeld" . PHP_EOL);
    }
    foreach (GELDEENHEDEN as $bedrag) {
        if ($restbedrag >= $bedrag) {
            $aantal = round(floor($restbedrag / $bedrag));
            $restbedrag = fmod($restbedrag, $bedrag);
            if ($bedrag >= 100) {
                echo $aantal . " x " . ($bedrag / 100) . " euro" . PHP_EOL;
            } else {
                    echo $aantal . " x " . $bedrag . " cent" . PHP_EOL;
            }
        }
    }
}
try {
    checkArguments($argc);
    $geld = $argv[1];
    checkChangeZero($geld);
    checkChangeNegative($geld);
    checkChangeNumber($geld);
    $geld = parseInput($geld);
    $wisselgeld = convertChange($geld);
    calculateChange($wisselgeld);
} catch (Exception $e) {
    echo "Error opgevangen: " . $e->getMessage();
}