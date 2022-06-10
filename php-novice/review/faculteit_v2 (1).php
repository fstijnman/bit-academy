<?php
// 1. vragen hoe hoog moet de faculteit minimaal zijn?
$min = readline("Hoe hoog moet de faculteit minimaal zijn?"); 
$faculteit = 1;
$count = 1;


// 1.A De loop blijft lopen totdat je de berekende faculteit je input waarde heeft bereikt of overschreidt
while ($faculteit < $min) {
    $faculteit *= $count;
    $count++;
}

// 3. print de faculteit
echo "De faculteit van $count is $faculteit";
?>
