<?php

for($i = 0; $i <= 5; $i++) {
    $a = rand();
    $tablica[$i] = $a;
}

$b = $tablica[0];
$j = 1;

while($j <= 5){
    if ($tablica[$j] > $b){
        $b = $tablica[$j];
    }
    $j++;
}

echo $b;

?>