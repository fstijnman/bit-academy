<?php

$aantal = readline('Hoeveel activiteiten wil je toevoegen?' . PHP_EOL);
if (!is_numeric($aantal)) {
    throw new Exception('Input is geen getal.');
}

$activiteiten = [];

for ($i = 0; $i < $aantal; $i++) {
    $activiteit = readline('Wat wil je toevoegen aan jouw bucket list?' . PHP_EOL);
    $activiteiten[] = $activiteit;
}

echo "Op jouw bucket list staat:" . PHP_EOL;

foreach ($activiteiten as $activiteit) {
    echo $activiteit . PHP_EOL;
}
