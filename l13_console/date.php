<?php

if (isset($argv[1]) === false) {
    echo "Prasau irasykite data" . PHP_EOL;

    exit(1);
}

$date = null;
if ($argv[1]) {
    $date = new DateTime($argv[1]);
} else {
    $date = new DateTime();
}

if ($argv[1] === "date()") {
    echo date("Y-m-d");
}

if ($argv[1] === "time()") {
    echo time();
}

echo "Jus ivedet: " . $date->format('Y-m-d H:i:s') . PHP_EOL;
