<?php

include_once "Order.php";

$order1 = new Order("emai@email.com", 4, Order::STATE_IN_PROGRESS);

echo $order1;

$orderClone = clone $order1;

echo $orderClone;

file_put_contents('serialize.txt', serialize($orderClone));
$content = file_get_contents('serialize.txt');
$newObject = unserialize($content);
