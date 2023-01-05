<?php

class CovidWater extends Product implements DiscountableInterface {
    private ?int $volume;

    public function setVolume(int $volumeFromParam): void
    {
        $this->volume = $volumeFromParam;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function applyDiscount(): void
    {
        $this->price = $this->price - 1;
    }

    public function display(): void
    {
        echo "DEZINFEKUOSIM SU " . $this->name;
    }
}