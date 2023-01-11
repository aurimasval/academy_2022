<?php

include_once "Exceptions/DivideByZeroException.php";
include_once "Exceptions/NegativeNumberException.php";
include_once "Klaida.php";
$input = 0  ;

try {
    $kliada = new Klaida();
    $kliada->action();

    if ($input === 0) {
        throw new DivideByZeroException(); // -> Exception -> Throwable
    }

    if ($input < 0) {
        throw new NegativeNumberException();  // -> Exception -> Throwable
    }

    $result = 100 / $input;
    echo "Rezultatas: " . $result;

} catch (Throwable $exception) {
    file_put_contents("errors.log", "Ivyko klaida" . $exception->getMessage() . ' ' . $exception->getFile() . ' ' . $exception->getLine());
    var_dump($exception->getTrace());
    echo "Gaudom sekancia klaida! " . $exception->getMessage();
}
