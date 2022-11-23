<?php

$number = (int)readline("Invesk skaičių: ");

var_dump($number);

echo "Pakeltas kvadratu : " . ($number * $number) . PHP_EOL;

echo "Dar reiketu vieno skaiciaus: " . PHP_EOL;

//%d reiskia integeri
//%s reiskia eilute
//%f skirtas float, per kablelei skaiciui
fscanf(STDIN, "%d %d", $number2, $number3);

echo "Kitas pakaletas: " . ($number2 * $number2);
echo "Kitas pakaletas: " . ($number3 * $number3);
