<?php

$faculteit_max = readline('Hoe hoog moet de faculteit minimaal zijn?' . PHP_EOL);
$totaal = 1;
$i = 2;
while ($totaal < $faculteit_max) {
    $totaal *= $i;
    $i++;
}
$i--;
echo "De faculteit van " . $i . " is " . $totaal . PHP_EOL;