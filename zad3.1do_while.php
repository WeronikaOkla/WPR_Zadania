<?php

for($i = 0; $i <= 5; $i++) {
    $a = rand();
    $tablica[$i] = $a;
}

$b = $tablica[0];
$j = 1;

do {
    if ($tablica[$j] > $b){
        $b = $tablica[$j];
    }
    $j++;
} while ($j <= 5);

echo $b;

?>