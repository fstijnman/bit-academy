<?php

echo 'Welke operatie wil je uitvoeren? (+, -)' . PHP_EOL;

$reactie0 = readline();

echo 'Eerste getal?' . PHP_EOL;

$reactie1 = readline();

echo 'Tweede getal?' . PHP_EOL;

$reactie2 = readline();


if ($reactie0 == '+') {
    echo 'Uw resultaat is: ' . $reactie1 + $reactie2;
} else {
    echo 'Uw resultaat is: ' . $reactie1 - $reactie2;
}



?>