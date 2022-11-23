<?php

echo "Įveskite pirmą dėmenį:";
fscanf(STDIN, "%d", $a);
echo "Įveskite antrą dėmenį:";
fscanf(STDIN, "%d", $b);

echo "Suma " . $a . " + " . $b . " ===> " . ($a + $b) . PHP_EOL;