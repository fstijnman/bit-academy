<?php

if (!isset($argv[1])) {
    exit('Verkeerd aantal argumenten. Roep de applicatie aan op de volgende manier: wisselgeld.php <bedrag>');
}

 $input = $argv[1];
 
function check_invoer($input)
{
    try {
        if ($input == 0) {
            throw new Exception('Geen wisselgeld');
        }
        if ($input < 0) {
            throw new Exception('Input moet een positief getal zijn.');
        } 
        if (!is_numeric($input)) {
            throw new Exception('Input moet een valide getal zijn');
        }
    } catch (Exception $ex) {
        exit('Error opgevangen: ' . $ex->getMessage() . PHP_EOL);
    }
}

function modulo($restbedrag, $eenheid)
{
    $restbedrag = fmod($restbedrag, $eenheid);
    return $restbedrag;
}
function afronden($restbedrag)
{
    $restbedrag = round($restbedrag * 2, 1) / 2;
    return $restbedrag;
}
check_invoer($input);
$restbedrag = floatval($input);
define("MONEY", array(50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05));

foreach (MONEY as $eenheid) {
    if ($restbedrag >= $eenheid) {
        $aantal_eenheden = $restbedrag / $eenheid;
        $restbedrag = modulo($restbedrag, $eenheid);
        $restbedrag = afronden($restbedrag);
        if ($eenheid >= 1) {
            echo floor($aantal_eenheden) . " x " . $eenheid . " euro" . PHP_EOL;
        } else {
            $eenheid = $eenheid * 100;
            echo floor($aantal_eenheden) . " x " . ($eenheid) . " cent" . PHP_EOL;
        }
    } 
}

?>
