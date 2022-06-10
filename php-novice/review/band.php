<?php

$albums = array(
"Citizen of Glass" => 4.5,
"Night" => 9,
"New Eyes" => 5,
"Strange Trails" => 10);

$totaal_prijs = 0;
$aantal = count($albums);

echo "Het album overzicht:" . PHP_EOL;

foreach ($albums as $album => $prijs) {
    echo $album . " kost €" . $prijs . PHP_EOL;

    $totaal_prijs = $totaal_prijs + $prijs;
}

$gemiddelde_prijs = $totaal_prijs / $aantal;

    echo "Het totaalbedrag van alle albums is €" . $totaal_prijs . PHP_EOL;
    echo "De gemiddelde prijs van alle albums is €" . $gemiddelde_prijs . PHP_EOL;

?>
