<?php

include_once "Calculator.php";
include_once "Storage.php";

$calculator = new Calculator();
$storage = new Storage();

$result = $calculator->calculate(5);
$storage->store($result);