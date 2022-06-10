<?php

$topo_array = array();

echo "Hoeveel landen ga je toevoegen?" . PHP_EOL;
$aantal = readline();

for ($i = 1; $i <= $aantal; $i += 1) {
	echo "Welk land wil je toevoegen?" . PHP_EOL;
    $land = readline();

    echo "Wat is de hoofdstad van " . $land . "?" . PHP_EOL;
    $hoofdstad = readline();

    $topo_array [$land] = $hoofdstad;
}

echo "De volgende landen zitten in de database:" . PHP_EOL;

foreach ($topo_array as $land => $hoofdstad) {
    echo $land . ", " . $hoofdstad . PHP_EOL;
}

?>
