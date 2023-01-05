<?php

class GiftCard extends Product
{
    use TimeTrait;
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

    public function display(): void
    {
        echo "DOVANOSIM : " . $this->name;
    }
}