<?php

echo "Het album overzicht:" . PHP_EOL;

$albums = [
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10,
];

foreach ($albums as $titel => $price) {
    echo $titel . ' kost €' . $price . PHP_EOL;
}

echo "Het totaalbedrag van alle albums is: €" . (array_sum($albums)) . PHP_EOL;
echo "De gemiddelde prijs van alle albums is: €" . (array_sum($albums)) / count($albums) . PHP_EOL;
