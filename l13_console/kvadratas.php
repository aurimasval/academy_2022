<?php

if (isset($argv[1]) === false) {
    echo "Prasau irasykite skaičių" . PHP_EOL;

    exit(1);
}

$number = (int)$argv[1];
$kvadratas = $number * $number;

echo "Skaiciaus " . $number . " kvadratas: " . $kvadratas . PHP_EOL;
