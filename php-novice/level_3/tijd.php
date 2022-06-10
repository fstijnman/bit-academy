<?php

$time = $argv[1];
$time_split = explode(" ", $time);
$totaal = 0;


foreach ($time_split as $time_element) {
    switch ($time_element) {
        case !(strpos($time_element, 'd') == ""):
            $totaal += (int) substr($time_element, 0, strpos($time_element, 'd')) * 86400;
            break;
        case !(strpos($time_element, 'u') == ""):
            $totaal += (int) substr($time_element, 0, strpos($time_element, 'u')) * 3600;
            break;
        case !(strpos($time_element, 'm') == ""):
            $totaal += (int) substr($time_element, 0, strpos($time_element, 'm')) * 60;
            break;
        case !(strpos($time_element, 's') == ""):
            $totaal += (int) substr($time_element, 0, strpos($time_element, 's'));
            break;
    }
}

echo $totaal . " seconden" . PHP_EOL;