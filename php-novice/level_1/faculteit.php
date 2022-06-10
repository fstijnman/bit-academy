<?php

$faculteit = readline('Van welk getal wil je de faculteit weten?' . PHP_EOL);
$totaal = 1;
for ($i = 2; $i <= $faculteit; $i++) {
    $totaal *= $i;
}

echo $totaal . PHP_EOL;