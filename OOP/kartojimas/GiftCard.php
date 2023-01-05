<?php

class GiftCard extends Product
{
    private ?DateTime $validTill;

    //setters
    public function setValidTill(DateTime $dateTime): void
    {
        $this->validTill = $dateTime;
    }

    public function getValidTill(): ?DateTime
    {
        return $this->validTill;
    }
}