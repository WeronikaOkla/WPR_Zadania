<?php

$i = $_POST['number'];

echo 'Na kostkach wypadlo: ';

for($j = 0; $j < $i; $j++) {
    echo rand(1, 6).' ';
}

?>