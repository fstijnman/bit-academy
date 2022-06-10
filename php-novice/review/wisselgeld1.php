<?php
$bedrag_euro = intval($argv[1]);
$bedrag_cent = (($argv[1] - $bedrag_euro) * 100);
define('GELD_ARRAY', [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05]);
echo "Dit is het begin:" . PHP_EOL . $bedrag . PHP_EOL;

if ($argv[1] === null) {
    echo "Je hebt geen wisselgeld ingevoerd" . PHP_EOL;
} else {
    foreach (GELD_ARRAY as $geld) {
        if ($bedrag_euro >= $geld) {
            $aantal = floor($bedrag_euro / $geld);
            $bedrag_euro = round(fmod($bedrag_euro, $geld), 2);
            print $aantal . " x " . $geld . " euro" . PHP_EOL;
        }
    }
    foreach (GELD_ARRAY as $geld) {
        if ($bedrag_cent >= ($geld * 100)) {
            $aantal = floor($bedrag_cent / ($geld * 100));
            $bedrag_cent = round(fmod($bedrag_cent, ($geld * 100)), 2);
            print $aantal . " x " . ($geld * 100) . " cent" . PHP_EOL;
            if ($bedrag_cent < 5 and $bedrag_cent > 0) {
                echo '1 x 5 cent';
            }
        }
    }
}
?>