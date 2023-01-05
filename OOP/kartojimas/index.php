<?php

include_once "TimeTrait.php";
include_once "Product.php";
include_once "DiscountableInterface.php";
include_once "Trip.php";
include_once "GiftCard.php";
include_once "CovidWater.php";

//Vykdomi shop'o veiksmai, objektu sukūrimas, veiksmai su objektais ir kažkokio outputo pateikimas
//Product->name = "asdfasdfsadfsaasdfa

//Pradedam naudot inheritance.

$trip = new Trip("Kelione į Kiprą", 500);
$trip->setDepartureDay(new DateTime());
var_dump($trip);
$trip->display();

echo PHP_EOL;

$giftCard1 = new GiftCard("Kuponas šventinis", 100);
$giftCard1->setValidTill(new Datetime('2024-01-01'));
var_dump($giftCard1);

$covidWater1 = new CovidWater("Dezinfekcinis skystis", 10);
$covidWater1->setVolume(500);
var_dump($covidWater1);
//Atejo kaledos reikia nuolaidu;
//var_dump($covidWater1->getPrice());
//$covidWater1->applyDiscount();
//var_dump($covidWater1->getPrice());
//
//var_dump($trip->getPrice());
//$trip->applyDiscount();
//var_dump($trip->getPrice());
$cart = [$giftCard1, $trip, $covidWater1];

/** @var Product $item */
foreach($cart as $item) {
    $item->display();
    var_dump($item->getPrice());
    if ($item instanceof DiscountableInterface) {
        $item->applyDiscount();
    }
    var_dump($item->getPrice());
}

$trip->setCreatedAt(new DateTime('1912-12-12'));
var_dump($trip->getCreatedAt());

echo $giftCard1->getPrice() . PHP_EOL;
echo Product::formatPrice($giftCard1->getPrice()) . PHP_EOL;
