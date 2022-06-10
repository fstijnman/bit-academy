<?php

$test = trim(file_get_contents('input.txt'));

$laagste = 0;
$hoogste = 0;
$huidige = 0;

for ($i = 0; $i < strlen($test); $i++) {
    if ($test[$i] == '^') {
        $huidige++;
    } else {
        $huidige--;
    }
    if ($huidige < $laagste) {
        $laagste = $huidige;
        $laagste_stap = $i;
    }
    if ($huidige > $hoogste) {
        $hoogste = $huidige;
        $hoogste_stap = $i;
    }
}

echo "Hoogste verdieping is " . $hoogste . PHP_EOL;
echo "Laagste verdieping is " . $laagste . PHP_EOL;

echo "Hoogste stap is " . $hoogste_stap + 1 . PHP_EOL;
echo "Laagste stap is " . $laagste_stap + 1 . PHP_EOL;
