<?php

$aantal = readline('Hoeveel landen ga je toevoegen?' . PHP_EOL);
$landen_steden = array();

for ($i = 0; $i < $aantal; $i++) {
    $land = readline("Welk land wil je toevoegen?" . PHP_EOL);
    $stad = readline("Wat is de hoofdstad van " . $land . "?" . PHP_EOL);
    $landen_steden[$land] = $stad;
}

echo "De volgende landen en steden zitten in de database:" . PHP_EOL;

foreach ($landen_steden as $land => $stad) {
    echo $land . ", " . $stad . PHP_EOL;
}