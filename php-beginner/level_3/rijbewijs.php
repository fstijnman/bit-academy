<?php
$age = readline('Hoe oud ben je?' . PHP_EOL);
if (floatval($age) >= 16.5) {
    echo "Je mag beginnen met rijlessen!";
} else {
    echo "Helaas, je mag nog niet beginnen met rijlessen.";
}
?>