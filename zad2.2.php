<?php

$kraj = $_POST['kraj'];

$narodowość = array(
    'Anglia' => 'Angilik',
    'Francja' => 'Francuz',
    'Hiszpania' => 'Hiszpan',
    'Polska' => 'Polak',
    'Niemcy' => 'Niemiec',
    'USA' => 'Amerykanin',
    'Japonia' => 'Japończyk',
    'Chiny' => 'Chińczyk',
    'Brazylia' => 'Brazylijczyk'
);

echo $narodowość[$kraj];

?>