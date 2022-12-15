<?php

try {
    $connection = mysqli_connect("127.0.0.1", "root", "stormtrooper", "mokymai_demo", 3306);
} catch (mysqli_sql_exception $exception) {
    echo "NEPAVYKO PRISIJUNGTI NES:" . $exception->getMessage() . "</br>";
    die('NUZUDOM APP');
}

//mysqli_fetch_row
echo "<br/><br/> mysqli_fetch_row <br/><br/>";
$statement = mysqli_query($connection, "SELECT * FROM products");
$result = mysqli_fetch_row($statement);
var_dump($result);
echo $result[2];


//
echo "<br/><br/> mysqli_fetch_assoc <br/><br/>";
$statement = mysqli_query($connection, "SELECT * FROM products");

//$i = 0;
$result = mysqli_fetch_assoc($statement);
var_dump($result);


//mysqli_fetch_array
echo "<br/><br/> mysqli_fetch_array <br/><br/>";
$statement = mysqli_query($connection, "SELECT * FROM products");
$result = mysqli_fetch_array($statement);
var_dump($result);
var_dump($result[2]);
var_dump($result['name']);

//mysqli_fetch_field
echo "<br/><br/> mysqli_fetch_field <br/><br/>";
$statement = mysqli_query($connection, "SELECT * FROM products");
$result = mysqli_fetch_field($statement);
var_dump($result);

//mysqli_fetch_row
echo "<br/><br/> mysqli_fetch_all <br/><br/>";
$statement = mysqli_query($connection, "SELECT * FROM products");
$result = mysqli_fetch_all($statement, MYSQLI_ASSOC);
//var_dump($result);

foreach ($result as $row) {
    //darom kazka su row
}

//Gauti duomenis iš mysql: gaunami visi produktai, kuriu kaina mazesne uz 50. Isvedamas pavadinimas ir kaina
$statement = mysqli_query($connection,
    "
        SELECT
            name,
            price
        FROM
            products p
        WHERE
            price < 50
    "
);
$result = mysqli_fetch_all($statement, MYSQLI_ASSOC);
var_dump($result);

///PRIDEKIM NAUJA
//try {
//    echo "<br>DUOMENYS IS GET'o<br>";
//    var_dump($_GET['name']);
//
//    $statement = mysqli_prepare($connection, 'INSERT INTO categories (name) VALUES (?)');
//    $name = $_GET['name'];
////i -> int
////s -> eilute
//    mysqli_stmt_bind_param($statement, "s", $name);
//    mysqli_stmt_execute($statement);
//
//    echo "<br>Duomenys prideti sekmingai<br>";
//} catch (mysqli_sql_exception $exception) {
//    echo "<br>Davete blogus duomenis<br>";
//}


//Searchas

try {
    echo "<br>DUOMENYS IS GET'o<br>";
    var_dump($_GET['name']);

    $statement = mysqli_prepare($connection, 'SELECT name FROM products p WHERE name LIKE ?');
    $name = '%' . $_GET['name'] . '%';
    $params = [$name];
//i -> int
//s -> eilute
//    mysqli_stmt_bind_param($statement, 's', ...$params);
    var_dump(mysqli_stmt_execute($statement, $params));
    $result = mysqli_stmt_get_result($statement);

    echo "<br> GAVOM REZULTATUS IS PAIESKOS <br>";
    var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));

} catch (mysqli_sql_exception $exception) {
    echo "<br>Davete blogus duomenis<br>";
}




mysqli_close($connection);






