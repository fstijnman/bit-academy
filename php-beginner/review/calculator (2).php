<?php

$operator = readline("Welke operator wil je uitvoeren? (+, -)" . PHP_EOL);
$a = readline("Eerste getal?" . PHP_EOL);
$b = readline("Tweede getal?" . PHP_EOL);

if ($operator == '+') {
    echo $a + $b . PHP_EOL;
} else {
    echo $a - $b . PHP_EOL;
}
?>