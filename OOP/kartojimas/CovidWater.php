<?php

class CovidWater extends Product {
    private ?int $volume;

    public function setVolume(int $volumeFromParam): void
    {
        $this->volume = $volumeFromParam;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }
}