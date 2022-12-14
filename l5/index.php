<?php

$functionInnerParameter = 6666;

//simple function
function calculate(int $parameter): int {
    global $functionInnerParameter;
    echo $functionInnerParameter . PHP_EOL;
    $kintamasis = 111111;

    return $functionInnerParameter * $parameter;
}


//echo calculate(4555) . PHP_EOL;
$betKoksGlobalusParametras = 5;
//echo calculate($betKoksGlobalusParametras) . PHP_EOL;
//echo calculate(6) . PHP_EOL;


//function with default param and nullable

function format(string $pirmas, ?string $antras, ?string $additional = "aaa") {
    echo $pirmas . " : " . $antras . " " . $additional . PHP_EOL;
}


//function with default param

function format_wordpress($pirmas, $antras, $additional = "aaa")
{
    if (!is_array($antras) && !is_array($pirmas)) {
        echo $pirmas . " : " . $antras . " " . $additional . PHP_EOL;
    }
    if (!is_array($antras) && !is_array($pirmas)) {
        echo $pirmas . " : " . $antras . " " . $additional . PHP_EOL;
    }
    if (!is_array($antras) && !is_array($pirmas)) {
        echo $pirmas . " : " . $antras . " " . $additional . PHP_EOL;
    }
    if (!is_array($antras) && !is_array($pirmas)) {
        echo $pirmas . " : " . $antras . " " . $additional . PHP_EOL;
    }
    if (!is_array($antras) && !is_array($pirmas)) {
        echo $pirmas . " : " . $antras . " " . $additional . PHP_EOL;
    }
}

//function with params

function format2(
    string $pirmas,
    ?string $antras,
    ?string $additional = "papildomas"
): string {
    return $pirmas . " : " . $antras . " " . $additional;
}

echo format2("Pirma", "Antra", "Trecia");


//Pas by reference| pass by value
$kriause = 88;
$obuolys = 6;
$vysnia = 88;

function passValue(int $value): int {
    return $value * 10;
}

function pasByReference(int &$value): void {
    $value = $value * 10;
}

echo $obuolys . PHP_EOL;
$obuolys = passValue($obuolys);
echo $obuolys . PHP_EOL;
$obuolys = passValue($obuolys);
echo $obuolys . PHP_EOL;
$obuolys = passValue($obuolys);
echo $obuolys . PHP_EOL;


$papildomasPArametras = 10;

//anonimine funkcija
$functionKintamasis =
    function ($param) use ($papildomasPArametras, $obuolys, $vysnia) {
        return $param * 7 * $papildomasPArametras;
    };

echo $functionKintamasis(7) . PHP_EOL;
echo $functionKintamasis(8) . PHP_EOL;
echo $functionKintamasis(9) . PHP_EOL;
//lamda funckija
$fnKintamasis = fn($param) => $param * 7 * $papildomasPArametras;

echo $fnKintamasis(7) . PHP_EOL;
echo $fnKintamasis(8) . PHP_EOL;
echo $fnKintamasis(9) . PHP_EOL;

