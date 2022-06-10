<?php

$landen_steden = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

$count = 0;

foreach ($landen_steden as $land => $stad) {
    $antwoord = readline('Welke hoofdstad heeft ' . $land . "?");
    if ($antwoord == $stad) {
        echo "Correct!" . PHP_EOL;
        $count++;
    } else {
        echo "Helaas, " . $antwoord . " is niet de hoofdstad van " . $land . "." . PHP_EOL;
        echo "Het correcte antwoord is: " . $stad . PHP_EOL;
    }
}

echo "Je hebt " . $count . " van de 10 goed geraden!" . PHP_EOL;