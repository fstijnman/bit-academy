<?php
$operator = readline('Welke operatie wil je uitvoeren? (+, -)' . PHP_EOL);
if ($operator == "+") {
    $first_number = readline('Eerste getal?' . PHP_EOL);
    $second_number = readline('Tweede getal?' . PHP_EOL);
    $result = $first_number + $second_number;
    echo "Uw resultaat is: " . $result;
} else {
    $first_number = readline('Eerste getal?' . PHP_EOL);
    $second_number = readline('Tweede getal?' . PHP_EOL);
    $result = $first_number - $second_number;
    echo "Uw resultaat is: " . $result;
}
?>