<?php
$operator = readline('Welke operatie wil je uitvoeren? (+, -, %)' . PHP_EOL);
if ($operator != '+' && $operator != '-' && $operator != '%') {
    exit("'{$operator}' is geen geldige operatie");
}
$first_number = readline('Eerste getal?' . PHP_EOL);
if (is_numeric($first_number) != 1) {
    exit("'{$first_number}' is geen getal");
}
$second_number = readline('Tweede getal?' . PHP_EOL);
if (is_numeric($second_number) != 1) {
    exit("'{$second_number}' is geen getal");
}

if ($second_number == 0 && $operator == '%') {
    exit("'{$second_number}' en '{$operator}' is geen geldige operatie");
}

if ($operator == '+') {
    $result = $first_number + $second_number;
} else if ($operator == '-') {
    $result = $first_number - $second_number;
} else {
    $result = $first_number % $second_number;
}

echo "Uw resultaat is: " . $result;
?>