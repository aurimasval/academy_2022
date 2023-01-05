<?php

include_once "Product.php";

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