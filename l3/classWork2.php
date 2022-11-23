<?php

//IF dalykai

$variable = (int)$argv[1];

var_dump((int)$argv[1]);

if ($variable === 5) {
    echo "VALIO 5" . PHP_EOL;
} elseif ($variable == 7) {
    echo "NE TOKS VALIO 7" . PHP_EOL;
}  elseif ($variable == 6) {
    echo "NE TOKS VALIO 6" . PHP_EOL;
} else {
    echo "NE 5, 6, 7" . PHP_EOL;
}


echo "SWITCH" . PHP_EOL . PHP_EOL;

//switch

$diena = "4";

switch ($diena) {
    case "penktadienis":
        echo "jau netoli savaitgalis";
    case 4:
    case "sestadienis":
        echo "PAGALIAU SAVAITGALIS";
    case "tueday":
    case "treciadienis":
        echo "DIRBAM DIRBAM";
    default:
        echo "Ka jau padarysi";
}


echo PHP_EOL . PHP_EOL . "MATCH" . PHP_EOL . PHP_EOL;


$diena = "ketvirtadienis";

echo match ($diena) {
    "ketvirtadienis" => "kazkas dirba",
    default => "nieko doro"
};

echo PHP_EOL . PHP_EOL . "WHILE" . PHP_EOL . PHP_EOL;

$i = 5;
while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}

echo PHP_EOL . PHP_EOL . "DO WHILE" . PHP_EOL . PHP_EOL;

$i = 600;

do {
    $i++;
    echo "PIRMA VYKDOM ŠITA SALYGA " . $i . PHP_EOL;
} while ($i < 500);


/**
5 5 5 5 5 5 5 5 5
5 4 4 4 4 4 4 4 5
5 4 3 3 3 3 3 4 5
5 4 3 2 2 2 3 4 5
5 4 3 2 1 2 3 4 5
5 4 3 2 2 2 3 4 5
5 4 3 3 3 3 3 4 5
5 4 4 4 4 4 4 4 5
5 5 5 5 5 5 5 5 5
 */
echo PHP_EOL . PHP_EOL . "DO WHILE" . PHP_EOL . PHP_EOL;

$n = 7;

for ($i = 1; $i <= ($n * 2) - 1; $i++) {
    for ($j = 1; $j <= ($n * 2) - 1; $j++) {
        $e = max([$i - $n, $n - $i, $n - $j, $n - $j, $j - $n]);
        echo $e + 1;
//        echo $n - '* ';
    }
    echo PHP_EOL;
}

