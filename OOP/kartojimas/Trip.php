<?php

class Trip extends Product implements DiscountableInterface {
    use TimeTrait;

    //Klaustukas priekyje reiškia kad gali būti null arba gali būti Datetime
    private ?DateTime $departureDay;
    //Klaustukas priekyje reiškia, kad gali būti null arba gali būti int
    private ?int $duration;
//
//    public function __construct(string $name, float $price, DateTime $departureDayFromParam, int $duration) {
//        echo "TRIP construktorius" . PHP_EOL;
//        parent::__construct($name, $price);
//        $this->departureDay = $departureDayFromParam;
//        $this->duration = $duration;
//    }

    public function setDepartureDay(Datetime $departureDayFromParam)
    {
        $this->departureDay = $departureDayFromParam;
    }

    public function setDuration(int $durationFromParam)
    {
        $this->duration = $durationFromParam;
    }

    public function display(): void {
        echo "KELIONE I : " . $this->name;
    }

    public function applyDiscount(): void
    {
        $newPrice = $this->price * 0.95;

        $this->price = $newPrice;
    }
}