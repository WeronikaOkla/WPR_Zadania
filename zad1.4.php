<?php

$pesel = "04262263584";
$rok = substr($pesel, 0, 2);
$miesiac = substr($pesel, 2, 2);
$dzien = substr($pesel, 4, 2);

if ($miesiac < 13) {
    $miesiac = $miesiac;
} else {
    $miesiac = $miesiac - 20;
}

echo ("Data urodzenia to $dzien.$miesiac.$rok")

?>