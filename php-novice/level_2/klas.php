<?php

$namen = readline('Wie zit er in de klas?' . PHP_EOL);
$namen = explode(" ", $namen);

echo "De studenten in de klas zijn:" . PHP_EOL;

foreach ($namen as $naam) {
    echo $naam . PHP_EOL;
}
