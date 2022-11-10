<?php

declare(strict_types=1);

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

function exercise1(): array
{
    /*
    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
    Skaidykite per underscore (_)
    */
    $longLine = 'Hello_how_are_you_doing?';

    return explode('_', $longLine);
}

echo PHP_EOL . '1 uzduoptis' . PHP_EOL;
var_export(exercise1());

function exercise2(): array
{
    /*
    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
    t.y. turi savyje simbolį @
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.com',
        'real@gmail.com',
    ];

    return array_filter($emails, function (string $element): bool {
        return str_contains($element, "@");
    });
}

echo PHP_EOL . '2 uzduoptis' . PHP_EOL;
var_export(exercise2());

function exercise3(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
    Naudokite $someProducts masyvą
    */

    return array_reduce($products, function ($sum, $item) {
        return $sum + strlen($item);
    });
}

echo PHP_EOL . '3 uzduoptis' . PHP_EOL;
var_export(exercise3($someProducts));

function exercise4(): array
{
    /*
    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
    Funkcijos kvietimas: exercise4()
    Funkcija grąžina: [2, 3, 3, 1, 2]
    */

    $words = [
        'tennis',
        'rooftops',
        'hillside',
        'warm',
        'friends',
    ];

    $vowels = ['a', 'e', 'i', 'o', 'u'];

    return array_map(function ($item) use ($vowels) {
        return strlen($item) - strlen(str_replace($vowels, "", strtolower($item)));
    }, $words);
}

echo PHP_EOL . '4 uzduoptis' . PHP_EOL;
var_export(exercise4());


function exercise5(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
    Naudokite $someProducts masyvą.
    */
    return array_reduce($products, function ($sum, $item) {
        return $sum + strlen(trim($item));
    });
}

echo PHP_EOL . '5 uzduoptis' . PHP_EOL;
var_export(exercise5($someProducts));


function exercise6(): int
{
    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

    /*
    Suskaičiuokite kiek balsių yra tekste
    */

    //balses:
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    //IDEJA: visas simboliu skaicius - simboliu skaicius be balsiu;
    $visasSimboliuSk = strlen($text);
//    var_dump($visasSimboliuSk);

    $sumazintasTekstas = strtolower($text);
//    var_dump($sumazintasTekstas);

    //ieskom tekso be balsiu
    $tekstasBeBalsiu = str_replace($vowels, "", $sumazintasTekstas);
//    var_dump($tekstasBeBalsiu);

    //ieskom tekso ilgio
    $result = $visasSimboliuSk - strlen($tekstasBeBalsiu);

    //viska vienoj eiluteje padarem
    return strlen($text) - strlen(str_replace(['a', 'e', 'i', 'o', 'u'], "", strtolower($text)));
}

echo PHP_EOL . '6 uzduoptis' . PHP_EOL;
var_export(exercise6());

###PAPILDOMAI###

function extraExercise1(string $stringToSplit, array $delimiters): array
{
    /*
    Funkcija turi priimti string'ą, kuris bus skaidomas,
    bei masyvą segmentų, pagal kuriuos bus skaidoma.
    Kvietimas turi atrodyti taip:
    exercise1('Hello_how_are-you doing?', [' ', '-', '_'])
    Funkcijos outputas turėtų atrodyti taip:
    ['Hello', 'how', 'are', 'you', 'doing?']
    */

    return explode(";", str_replace($delimiters, ";", $stringToSplit));
}

echo PHP_EOL . 'EXTRA 1 uzduoptis' . PHP_EOL;
var_export(extraExercise1('Hello_how_are-you doing?', [' ', '-', '_']));

function extraExercise2(array $words): array
{
    /*
    Sukategorizuokite žodžius pagal jų pradžios simbolį.
    Funkcija kviečiama:
    exercise2(['hello', 'Hickup', '123', 'computer'])
    Funkcijos outputas:
    [
        'h' => ['hello', 'Hickup'],
        '1' => ['123'],
        'c' => ['computer'],
    ]
    */

    $categories = [];

    foreach ($words as $word) {
        $firstLetter = substr(strtolower($word), 0, 1);
        $categories[$firstLetter][] = $word;
    }

    return $categories;
}
echo PHP_EOL . 'EXTRA 2 uzduoptis' . PHP_EOL;
var_export(extraExercise2(['hello', 'Hickup', '123', 'computer']));

function extraExercise3(array $words): array
{
    /*
    Išveskite žodžių statistiką.
    Funkcija kviečiama:
    exercise2(['hello', 'you'])
    Funkcijos outputas:
    [
        'hello' => [
            'vowels' => 2,
            'consonants' => 3,
            'length' => 5,
            'starts_with' => h,
            'ends_with' => o,
        ],
        'you' => [
            'vowels' => 3,
            'consonants' => 0,
            'length' => 3,
            'starts_with' => y,
            'ends_with' => u,
        ]
    ]
    */
    return array_map(function ($item) {
        $vowels = strlen($item) - strlen(str_replace(['a', 'e', 'i', 'o', 'u', 'y'], "", strtolower($item)));

        return [
            'vowels' => $vowels,
            'consonants' => strlen($item) - $vowels,
            'length' => strlen($item),
            'starts_with' => substr($item, 0, 1),
            'ends_with' => substr($item, -1, 1),
        ];
    }, $words);
}

echo PHP_EOL . 'EXTRA 3 uzduotis' . PHP_EOL;
var_export(extraExercise3(['hello', 'you']));

function extraExercise4(): array
{
    /*
    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
    simboliais a, s, b, o
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.io',
        'real@gmail.com',
    ];

    return array_filter($emails, function ($item) {
        $symbols = ['a', 's', 'b', 'o'];
        $firstLetter = substr($item, 0, 1);
        $lastLetter = substr($item, -1, 1);

        return in_array($firstLetter, $symbols) || in_array($lastLetter, $symbols);
    });
}

echo PHP_EOL . 'EXTRA 4 uzduotis' . PHP_EOL;
var_export(extraExercise4());