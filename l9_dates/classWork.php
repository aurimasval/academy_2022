<?php

//var_dump(date('Y-m-d H:i:s'));

//var_dump(new DateTime());
//var_dump(new DateTime('1999-01-01 12:00'));
$formatLT = "Y-m-d H:i:s";
$formatUSA = "d-Y-m H:i:s a";

$date = new DateTime('1999-01-01 12:00');

var_dump($date->format('F  Y  D d ---- j'));
var_dump($date->format($formatLT));
var_dump($date->format($formatUSA));


//var_dump(new DateTime("01 1999 01 12:00:00 pm"));

$pakurtaData = DateTime::createFromFormat("d Y m H:i:s a", "01 1999 01 12:00:00 pm");
//
var_dump($pakurtaData);


//Datos modifikavimas

$date = new DateTime('2019-01-05');

$dateModified = $date->modify("last day of");

var_dump($dateModified);


##set time set dat

$date = new DateTime('2019-01-05');

var_dump($date);
$dateModified = $date->setTime(15, 3);

var_dump($dateModified);

$dateModified = $date->setTime(15, 55, 12);

var_dump($dateModified);

$dateModified = $date->setDate(2013, 3, 10);

var_dump($dateModified);


var_dump(new DateTime('2010-10-10') < new DateTime('2012-11-11'));
##Day diff

echo "DAY DIFF" . PHP_EOL . PHP_EOL. PHP_EOL. PHP_EOL;

$day1 = new DateTime('2005-05-01 00:00:00');
$day2 = new DateTime('2010-10-14 23:10:00');

$diff = $day1->diff($day2);


echo "skiriasi per metus: " . $diff->y . " per menesius " . $diff->m . " per dienas " . $diff->d .  " per kiek valandu " . $diff->h . " minutes " . $diff->i . PHP_EOL;


echo "skiriasi is viso per dienas " . $diff->days . PHP_EOL;

echo $diff->format("%a days");
echo $diff->format("%y years %m months %d days");

