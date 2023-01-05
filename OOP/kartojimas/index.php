<?php

include_once "Product.php";
include_once "DiscountableInterface.php";
include_once "Trip.php";
include_once "GiftCard.php";
include_once "CovidWater.php";

//Vykdomi shop'o veiksmai, objektu sukūrimas, veiksmai su objektais ir kažkokio outputo pateikimas
//Product->name = "asdfasdfsadfsaasdfa

//Kuriam objekta product
$product1 = new Product("TEST", 5);
//Uždėjom pavadinimą:
//$product1->setName("Kaštonas");
//Pausdinam pavadinimą:
var_dump($product1->getName());

//Pakurti dar viena objekta:
$product2 = new Product("Aguona", 67);
//Uždėkim kaina ir uždėkim pavadinimą.
//$product2->setName("Giles");
$product2->setPrice(12);
echo $product2->getName() . ' kainuoja: ' . $product2->getPrice() . ' EUR';
var_dump($product1);

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

foreach($cart as $item) {
    var_dump($item->getPrice());
    if ($item instanceof DiscountableInterface) {
        $item->applyDiscount();
    }
    var_dump($item->getPrice());
}
