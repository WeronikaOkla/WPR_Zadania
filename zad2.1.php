<?php

$i = 0;
$a = $_POST['number'];

while ($i <= 5){
    $b = rand(0, 100);
    $tablica[$i] = $b;
    $i++;
}

echo $tablica[$a];

?>