<?php
$games = [
	["Call of Duty", "Shooter", 59.95],
	["Rocket League", "Sport", 19.95],
	["Assassins Creed", "RP", 49.95]
];

$total_price = 0;
$total_chars = 0;
$count = 0;

foreach ($games as $game) {
	$total_price += $game[2];
	$total_chars += strlen($game[0]);
	$count += 1;
}

$avg_price = number_format($total_price / $count, 2, ".", "");
$avg_chars = number_format($total_chars / $count);

echo "Gemiddelde prijs: €{$avg_price}" . PHP_EOL;
echo "Gemiddelde lengte van titel: {$avg_chars} karakters" . PHP_EOL;

?>