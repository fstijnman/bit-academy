<?php

$uitvoer = readline('Welke operatie wil je uitvoeren? (+, -, %)');

// is de juiste operatie ingevoerd? Anders exit melding 

if ($uitvoer == '+' || $uitvoer == '-' || $uitvoer == '%') {
    $x = readline('Eerste getal?') . PHP_EOL;
} else {
    exit('Dit is geen geldige operatie');
}

// is het antwoord op eerste getal numeric? ja, dan vragen naar tweede getal. Anders? dan een exit melding 

if (is_numeric($x) == 1) {
    $y = readline('Tweede getal?');
} else {
    exit('Dit is geen getal');
}

// is de invoer op $y numeric? Ja, dan door naar berekening. Anders? Dan een exit melding

if (is_numeric($y) == 0) {
    exit('Dit is geen getal');
} 

//calculatie

if ($uitvoer == '+') {
    echo 'Uw resultaat is: ' . $x + $y;
} elseif ($uitvoer == '-') {
    echo 'Uw resultaat is: ' . $x - $y;
} elseif ($uitvoer == '%') {
    echo 'Uw resultaat is: ' . $x % $y;
}
