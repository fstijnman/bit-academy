<?php

$albums = array(
    "Citizen of Glass" => "4.5",
    "Night" => "9",
    "New Eyes" => "5",
    "Strange Trails" => "10"
);

$totaal_bedrag = 0;

echo "Het albumoverzicht: " . PHP_EOL;

foreach ($albums as $album => $prijs) {
    echo $album . " kost €" . $prijs . PHP_EOL;
    $totaal_bedrag += $prijs;
}

echo "Het totaalbedrag van alle albums is €" . $totaal_bedrag . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €" . $totaal_bedrag / count($albums) . PHP_EOL;