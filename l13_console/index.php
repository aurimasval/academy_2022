<?php

$number = null;
$tries = 5;
$number = readline("Įveskite numerį: ");

while (!is_numeric($number) && $tries > 0) {
    echo "ivestas blogas numeris. Liko bandymų: " . $tries . PHP_EOL;
    $number = readline("Įveskite numerį: ");
    $tries--;
}

if (!is_numeric($number)) {
    echo "Tu gal skaiciu nepažįsti?" . PHP_EOL;

    exit(1);
}

echo "Jūs įvedėt teisinga numerį: " . $number;