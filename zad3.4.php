<?php

$int = $_POST['number'];

function liczbapierwsza($int) {
	$i = 2;
    $a = 0;
 
	while($i < $int) {
		$a++;
        if($int % $i == 0) {
            echo 'Nie jest ';
            echo 'Ilość pentli '.$a;
			return false;
		}
		$i++;
	}
    echo 'Jest ';
    echo 'Ilość pentli '.$a;
	return true;
}

liczbapierwsza($int);

?>