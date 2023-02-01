<?php

interface TotalCalculatorInterface {
    public function calculatePrice(array $items): float;
}

class StandardPriceCalculator implements TotalCalculatorInterface {
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item;
        }

        return $sum;
    }
}

class SubscriberPriceCalculator implements TotalCalculatorInterface {
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item;
        }

        return $sum * 0.9;
    }
}

class Order {
    private array $items;
    private TotalCalculatorInterface $calculator;

    public function __construct(array $items, TotalCalculatorInterface $totalCalculator) {
        $this->items = $items;
        $this->calculator = $totalCalculator;
    }

    public function orderPrice()
    {
        return $this->calculator->calculatePrice($this->items);
    }
}

$calculator = new StandardPriceCalculator();
$fancyCalculator = new SubscriberPriceCalculator();

var_dump((new Order([10, 12], $fancyCalculator))->orderPrice());