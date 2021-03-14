<?php

function cenzor($zdanie)
{
    $slownik = array("ekranie","Kompleks","Przemyslowy","ruine","Konstelacji");
    foreach($slownik as $slowo)
    {
        $rozmiar = strlen($slowo);
        $cenzura = '';
        for ($i = 0; $i < $rozmiar; $i++)
            $cenzura .= '*';

        $zdanie = str_replace($slowo, $cenzura, $zdanie);
    }
    return $zdanie;
}

echo cenzor("Sceny na ekranie ukazywaly, jak Kompleks Przemyslowy zmienial sie w ruine za sprawa Konstelacji.")

?>