<?php
$list = array();

$product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
array_push($list, $product);
function boodschappenlijst($functie)
{
    echo "Je boodschappen lijstje bevat nu:" . PHP_EOL;
    foreach ($functie as $value) {
        echo $value . PHP_EOL;
    }
}

// Deze echo moet in het midden blijven staan
boodschappenlijst($list);
echo ("Bedankt voor het gebruik van de boodschappenlijst!") . PHP_EOL;

while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (y/n)")), 0, 1)) === 'y') {
    $product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    array_push($list, $product);
    boodschappenlijst($list);
}
