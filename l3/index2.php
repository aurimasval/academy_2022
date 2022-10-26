<?php

$variable = "5"; //string

//&& -> and
//|| -> or

// = PRISKYRIMO OPERATORIUS
// ==  NETIKRINIMA TIPU, TIKRINAM TIK VERTĘ
// === TIKRINA IR TIPA



//$kintamasis2 = 8;
//
//echo $kintamasis2 . PHP_EOL;
//
//if ($kintamasis2 = 9) {
//    echo "VISKAS OK" . PHP_EOL;
//}
//
//echo $kintamasis2 . PHP_EOL;

var_dump($variable);
var_dump(5);

if ($variable === 5 || $variable == 6)
    echo "Lygus 5 arba 6" . PHP_EOL;
elseif ($variable == 6) {
    echo "Lygus 6" . PHP_EOL;
    echo "NELYGUS 5" . PHP_EOL;
} else {
    echo "BET KAS" . PHP_EOL;
}


echo PHP_EOL . "SWITCH" . PHP_EOL;

$variable = 4;

switch ($variable) {
    case 3:
    case 4:
    case 5:
        echo "Maziau uz 5 bet daugiau uz 3". PHP_EOL;
        break;
    case 6:
        echo "SWITCH 6". PHP_EOL;
        break;
    default:
        echo "BET KAS" . PHP_EOL;
}


echo PHP_EOL . "MATCH" . PHP_EOL;

$variable = "5";

$result = match ($variable) {
    3 => "MATCH 3". PHP_EOL,
    5 => "MACTH 5". PHP_EOL,
    6 => "MATCH 6". PHP_EOL,
    default => "NO MATCH"
};

echo $result;



echo PHP_EOL . "WHILE" . PHP_EOL;

//set_time_limit(1);

$variable = 5;
while ($variable < 10) {
    echo $variable . " Maziau uz 10" . PHP_EOL;
    $variable++;
}


$executing = true;
$kolNeatejoRuduo = true;

while ($executing && $kolNeatejoRuduo && 5 < $variable) {
    echo $variable . " Maziau uz 10" . PHP_EOL;
    $variable++;
    if ($variable === 19) {
        $executing = false;
    }
}

while ($variable < 19) {
    echo "Nieko neivyko";
}


echo PHP_EOL . "PAPRASTAS WHILE" . PHP_EOL;

$i = 0;

while ($i > 10) {
    echo $i . PHP_EOL;
    $i++;
}

echo PHP_EOL . "DO WHILE" . PHP_EOL;

$i = 0;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i > 10);


echo PHP_EOL . "FOR ciklas paprastas" . PHP_EOL;

for ($kintamasis = 0; $kintamasis < 10; $kintamasis = $kintamasis + 4) {
    echo $kintamasis . PHP_EOL;
}

echo PHP_EOL . "WHILE ATITIKMUO" . PHP_EOL;

$i = 0;
while ($i < 10) {
    echo $i . PHP_EOL;
    $i = $i + 4;
}


echo PHP_EOL . "FOR WITH ARRAY" . PHP_EOL;
$array = [5, 6, 8, 9, 10, 3];

for ($i = 0; $i < count($array); $i++) {
    echo "index: " . $i . " reiksme: " . $array[$i] . PHP_EOL;
}

echo PHP_EOL . "FOREACH WITH ARRAY" . PHP_EOL;

foreach ($array as $index => $reiksme) {
    echo "index: " . $index . " reiksme: " . $reiksme . PHP_EOL;
}


echo PHP_EOL . "FOREACH WITH CONTINUE AND BREAK" . PHP_EOL;

$array = [5, 6, 8, 9, 10, 2, 7, 4, 3];

//$array = [5, 6, 8, 3];

//$array = [5, 6, 8, 2,];
foreach ($array as $index => $reiksme) {
    if ($reiksme >= 9) {
        continue;
    }

    if ($reiksme === 6) {
        echo "PAPILDOMAS TEKSTAS 6" . PHP_EOL;
    }

    if ($reiksme === 8) {
        echo "PAPILDOMAS TEKSTAS 8" . PHP_EOL;
    }

    if ($reiksme === 7) {
        break;
    }



    echo "index: " . $index . " reiksme: " . $reiksme . PHP_EOL;
}


echo PHP_EOL . "2 <Masyvai" . PHP_EOL;

$array1 = [5, 6, 8];
$array2 = [7, 4, 3];

foreach ($array1 as $index => $item1) {
    echo "array1 reiksme: " . $item1 . PHP_EOL;

    foreach ($array2 as $item2) {
        echo "array2 reiksme: " . $item2 . PHP_EOL;

        if ($item1 === 6 && $item2 === 4) {
            break 2;
        }
    }
}
