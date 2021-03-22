<table border=1>

<?php

for ($i = 1; $i <= $_POST['number']; $i++){
	echo '<tr>';
	for ($j = 1; $j <= $_POST['number']; $j++){
		echo '<td>'.($i * $j).'</td>';
	}
	echo '</tr>';
}

?>

</table>