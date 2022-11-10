<?php

declare(strict_types=1);

/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
function exercise1(): void
{
}


/*
2. Išspausdinkite dabartinę datą formatu: '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
function exercise2(): void
{
}


/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00
- 1970 Mar 01 15:15
- 1970 Mar 1st 11:15:00 PM
- 1970/3/1
- savaites numeris (52 savaitės metuose)
- dienos numeris (365 dienos metuose)
*/
function exercise3(): void
{
    echo date('Y M j H:i:s'). PHP_EOL;
    echo date('Y M d H:i'). PHP_EOL;
    echo date('Y M jS H:i:s A'). PHP_EOL;
    echo date('Y/n/j'). PHP_EOL;
    echo date('W'). PHP_EOL;
    echo date('z'). PHP_EOL;
}
echo PHP_EOL . ' 3 uzdavinys ' . PHP_EOL;
exercise3();

/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/
function exercise4(): void
{
    var_dump(DateTime::createFromFormat('Y-m-d H:i:s', '2000-03-02 15:30:00'));
    var_dump(DateTime::createFromFormat('Y/m/d H:i:s A', '2000/02/15 08:30:00 PM'));
    var_dump(DateTime::createFromFormat('Y F jS H:i:s', '2000 March 2nd 15:30:00'));
}

echo PHP_EOL . ' 4 uzdavinys ' . PHP_EOL;
exercise4();
/*
5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

function exercise5(): void
{
    $dateX = DateTime::createFromFormat('jS M Y H:i:s A', '15th Jan 2021 8:15:01 PM');
    var_dump((clone $dateX)->modify('+2 weeks'));
    var_dump((clone $dateX)->modify('+1 weeks'));
    var_dump((clone $dateX)->modify('+ 10 years'));
    var_dump((clone $dateX)->modify('- 5 hours'));
    var_dump((clone $dateX)->modify('last day of'));
    var_dump((clone $dateX)->modify('first day of'));
    var_dump((clone $dateX)->modify('next Tuesday'));
    var_dump((clone $dateX)->modify('1 day ago 8 hours ago 15 minutes ago'));
}

echo PHP_EOL . ' 5 uzdavinys ' . PHP_EOL;
exercise5();

function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 02 15:00:12',
        ],
    ];

    /*
    Išspausdinkite produktų paskutinių pirkimų santrauką:
    Wine glass 2021-01-15 18:34:12
    ...
    */

    foreach ($products as $product) {
        $newDay = DateTime::createFromFormat('Y M d H:i:s', $product['last_purchase']);

        echo $product['name'] . ' ' . $newDay->format('Y-m-d H:i:s') . PHP_EOL;
    }
}

echo PHP_EOL . ' 6 uzdavinys ' . PHP_EOL;
exercise6();


function exercise7($date1, $date2): string
{
    /*
    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.
    Funkcijos kvietimas: exercise7(new Datetime('2022-01-25 17:13:25'), new Datetime('2020-01-25 17:13:25'));
    Rezultatas:
    'First date is newer'
    Funkcijos kvietimas: exercise7(new Datetime('2020-01-25 17:13:25'), new Datetime('2022-01-25 17:13:25'));
    Rezultatas:
    'Second date is newer'
    */

    return '';
}

function exercise8($date): void
{
    /*
    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.
    Funkcijos kvietimas: exercise8(new Datetime('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 891 days ago
    Funkcijos kvietimas: exercise8(new Datetime('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}

function exercise9($date): void
{
    /*
    Išspausdinkite datų skirtumą žodžiais.
    Funkcijos kvietimas: exercise9(new Datetime('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 2 years 1 months 11 days
    Funkcijos kvietimas: exercise9(new Datetime('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}