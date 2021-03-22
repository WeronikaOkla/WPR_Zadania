<?php

for($i = 0; $i <= 5; $i++) {
    $a = rand();
    $tablica[$i] = $a;
}

$b = $tablica[0];

for($j = 1; $j <= 5; $j++){
    if ($tablica[$j] > $b){
        $b = $tablica[$j];
    }
}

echo $b;

?>