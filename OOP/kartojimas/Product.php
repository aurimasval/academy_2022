<?php

class Product {
    private string $name;
    private float $price; //5.5

    //constructor
    public function __construct(string $nameFromConstructorParam, float $priceFromConstructorParam)
    {
        $this->name = $nameFromConstructorParam;
        $this->price = $priceFromConstructorParam;
    }

    //setters
    public function setName(string $nameFromSomewhere): void
    {
        $this->name = $nameFromSomewhere;
    }

    public function setPrice(float $priceFromSomewhere): void
    {
        $this->price = $priceFromSomewhere;
    }

    //getters
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}