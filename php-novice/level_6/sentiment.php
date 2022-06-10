<?php

$positieveWoorden = convertFileToArray("positive-words.txt");
$neutraleWoorden = convertFileToArray("neutral-words.txt");
$negatieveWoorden = convertFileToArray("negative-words.txt");
$lyrics = file_get_contents("lyrics.txt");
$lyrics = str_replace("\n", " ", $lyrics);
$lyrics = explode(" ", $lyrics);

function convertFileToArray($file)
{
    $array = file_get_contents($file);
    $array = explode("\n", $array);
    return $array;
}

function analyzeSentiment($text_file, $positiveWords, $neutralWords, $negativeWords)
{
    $positiveCount = 0;
    $negativeCount = 0;
    $neutralCount = 0;
    foreach ($text_file as $word) {
        if (in_array($word, $positiveWords)) {
            $positiveCount++;
        }
        if (in_array($word, $negativeWords)) {
            $negativeCount++;
        }
        if (in_array($word, $neutralWords)) {
            $neutralCount++;
        }
    }
    return array($positiveCount, $neutralCount, $negativeCount);
}

function printResult($counts, $sentiment)
{
    echo "Positieve woorden: " . $counts[0] . PHP_EOL;
    echo "Neutrale woorden: " . $counts[1] . PHP_EOL;
    echo "Negatieve woorden: " . $counts[2] . PHP_EOL;
    echo "Het sentiment van de tekst krijgt een score van: " . number_format($sentiment, 2) . PHP_EOL;
}

$counts = analyzeSentiment($lyrics, $positieveWoorden, $neutraleWoorden, $negatieveWoorden);
$sentiment = ($counts[1] + $counts[0] - $counts[2]) / $counts[1];
printResult($counts, $sentiment);

