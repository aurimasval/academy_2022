<?php

declare(strict_types=1);

/*
1. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
2
3
...
*/

/*
2. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*
3. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi būti išspausdintas naujoje eilutėje.
1
3
5
...
*/

for ($i = 0; $i < 20; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i;
}


for ($i = 0; $i < 20; $i = $i + 2) {
    echo $i;
}

/*
4. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

for ($i = 0; $i < 20; $i++) {
    if ($i % 3 === 0) {
        echo $i;
    }
}

/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 ir iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

for ($i = 0; $i < 20; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i;
    }
}

/*
6. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/

$sum = 0;
for ($i = 1; $i < 100; $i++) {
    $sum = $sum + $i;
}

echo $sum;

/*
7. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];

$weekString = "";

foreach ($days as $day) {
    $weekString .= $day . "-";
}

echo $weekString;
/*
8. Skaičių konvertavimas į bool.
Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite kiekvieną skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę
-5
bool(true)
----------
-4
bool(true)
----------
...
Atkreipkite dėmesį, į ką pavirsta skaičius 0
*/

//(int)"5";

for ($i = -5; $i < 5; $i++) {
    echo $i;
    var_dump((bool)$i);
}

/*
9. Foreach'inkite per masyvą ir išspausdinkite jame esančias eilutes.
Jeigu iteracijos tekstas yra vienas iš: '/', '*' arba '()', jo nespausdinkite, teskite iteraciją.
Jeigu interacijos tekstas yra lygus '---', teksto nespausdinti, o ciklas turėtų nutrūkti.
Užduočiai atlikti naudokite 'continue' ir 'break'.
$items = [
    'Lazy',
    '/',
    'fox',
    'jumps',
    '*',
    'over',
    'the',
    '()',
    'lazy',
    'dog',
    '---',
    'this',
    'should',
    'not',
    'be',
    'printed',
    'or',
    'iterated',
];
*/

/*
10. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinta vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

for ($i = 1; $i < 20; $i++) {
    $result = "";

    if ($i % 3 === 0 && $i % 5 === 0) {
        $result .= "HeyHo";
    }

    if ($i % 3 === 0) {
        $result .= "HEY 3";
    }

    if ($i % 4 === 0) {
        $result .= "ttttest";
    }

    if ($i % 5 === 0) {
        $result .= "Ho";
    }

    if (!$result) {
        echo $i . " ";
    } else {
        echo $result . " ";
    }
}

/*
11. Pasinaudodami ciklais, išspausdinkite lentelę, kurioje nelyginiai skaičiai yra žvaigždutės.
Parašykite kodą taip, kad jis su menkais pakeitimais veiktų ir tuo atveju, jeigu reiktų spausdinti
ne iki 20, bet iki kito dviženklio skaičiaus (pvz. 90).
* |2 |* |4 |*
6 |* |8 |* |10
* |12|* |14|*
16|* |18|* |20
*/

for ($i = 1; $i <= 20 ; $i++) {
    $result = "";

    if ($i % 2 === 0) {
        $result .= $i;
    } else {
        $result .= "*";
    }

    echo $result;

    if ($i % 5 === 0) {
        echo PHP_EOL;
    } else {
        echo " |";
    }
}

/*
12. Pasinaudodami ciklais, išspausdinkite į terminalą šią figūrą.
*
**
***
****
*****
******
*******
******
*****
****
***
**
*
*/

$number = 10;

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}


for ($i = 0; $i < $number + 1; $i++) {
    for ($j = 0; $j <= $number - $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}


/*
13. Išspausdinkite stačiakampį, kurio matmenys bus kinamųjų reikšmės.
$length = 5;
$height = 4;
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*/

$length = 5;
$height = 4;

for ($i = 1; $i <= $height; $i++) {
    for ($j = 1; $j <= $length; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}
/*
14. Išspausdinkite skaičių nuo 1 iki x daliklius, mažesnius už patį skaičių.
1:
2: 1
3: 1
4: 1 2
5: 1
6: 1 2 3
7: 1
8: 1 2 4
9: 1 3
10: 1 2 5
11: 1
12: 1 2 3 4 6
...
 */
$number = 24;

for ($i = 1; $i <= $number; $i++) {
    echo $i . ": " ;
    for ($j = 1; $j < $i; $j++) {
        if ($i % $j === 0) {
            echo $j . " ";
        }
    }
    echo PHP_EOL;
}