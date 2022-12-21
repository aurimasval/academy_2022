<?php

class Animal
{
    protected string $name;

    private string $type; // plesrunas | zoleedie

    public function __construct(string $name, string $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function talk() {
        echo "Sveiki esu : " . $this->name . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Fish extends Animal
{
    private string $waterType; //gelavendene ar jurine

    public function __construct(string $name, string $type, $waterType)
    {
        $this->waterType = $waterType;
        parent::__construct($name, $type);
    }

    public function talk()
    {
        parent::talk();
        echo "Esu zuvele kur gyvena vandenyje " . $this->waterType . PHP_EOL;
    }
}

class Dog extends Animal
{
    private Datetime $feedingTime;

    public function __construct(string $name, string $type, DateTime $feedingTime)
    {
        $this->feedingTime = $feedingTime;
        parent::__construct($name, $type);
    }

    public function arAlkanas()
    {
        return new DateTime() > $this->feedingTime;
    }

    public function talk()
    {
        echo "Labas esu: " . $this->getName() . " ir noresiu valgyti " . $this->feedingTime->format('Y-m-d');
    }
}

$fish1 = new Fish('Zuvuikas Nemo', "Zoliaedis", "suriam");
$fish1->talk();

$fishSimple = new Animal("Paprasta zuvis", "Zoliaedis");
$fishSimple->talk();

$dog = new Dog("Ciucikas", "plesrunas", new DateTime("2022-12-25"));

$dog->talk();