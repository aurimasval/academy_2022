<?php

$input = 0;

try {
    if ($input === 0) {
        throw new Exception('Pateiktas netinkamas skaičius. Skaičius negali būti 0');
    }

    $result = 100 / $input;
    echo "Rezultatas: " . $result;

} catch (Exception $exception) {
    file_put_contents("errors.log", "Ivyko klaida" . $exception->getMessage() . ' ' . $exception->getFile() . ' ' . $exception->getLine());
    echo "Pasitikrink inputą: " . $exception->getMessage();
}
