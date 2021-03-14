<?php

function trojkat(){
    $a = 4;
    $h = 10;
    return ($a * $h) / 2;
}

function trapez(){
    $a = 3;
    $b = 8;
    $h = 5;
    return ($a + $b) / 2 * $h;
}

function prostokat(){
    $a = 6;
    $b = 9;
    return $a * $b;
}

$figura = "prostokat";

switch($figura){
    case "trojkat": {
        echo (trojkat());
        break;
    }
    case "trapez": {
        echo (trapez());
        break;
    }
    case "prostokat": {
        echo (prostokat());
        break;
    }
}

?>