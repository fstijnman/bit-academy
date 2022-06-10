<?php
$num = readline('Hoe hoog moet de faculteit minimaal zijn? ');
$i = 1;
$fac = 1;


while ($fac <= $num) {
    $i++;
    $fac = $fac * $i;
}

echo "De faculteit van $num is $fac" . PHP_EOL;

?>