<?php

include_once "Magic.php";

$magic = new Magic('Avada kedavra'); //vykdomas construct
var_dump((string)$magic); // vykdomsa toString
$magic(); //vykdom kai funkcija

//Konvertuoja i eilute su visais properciais kvieciamas __serialize pagal key ir vertas, kvieciams __sleep pagal key
$objektoEilute = serialize($magic);
echo ($objektoEilute);

//funkcija kuri atkonvertuoja is eilutes i objekta.
$object = unserialize($objektoEilute);
var_dump($object);

$naujasKlonuotas = clone $magic;
var_dump($naujasKlonuotas);
