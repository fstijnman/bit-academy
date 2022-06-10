<?php

$input = trim(file_get_contents('input.txt'));
$input = explode(" ",$input);

$lowest = 9999;
$highest = 0;


foreach($input as $number1) {
    if ($number1 < $lowest) {
        $lowest = $number1;
    }
    if ($number1 > $highest) {
        $highest = $number1;
    }
    foreach($input as $number2) {
        $som = $number1 + $number2;
        if ($som == 159) {
            if ($number1 > $number2) {
                $pincode = (string) $number2 . (string) $number1;
            } else {
                $pincode = (string) $number1 . (string) $number2;
            }
        }
    }
}

// echo $pincode . PHP_EOL;

$verschil = $highest - $lowest;
$pincode = $pincode[0] . $verschil . $pincode[-1];
echo $pincode . PHP_EOL;