<?php

interface Fillable {
    public function fill();
}
interface Chargeable {
    public function charge();
}

class ElektrineMasina implements Chargeable
{
    public function charge()
    {
        echo "charging";
    }
}

class FordSierra implements Fillable {
    public function fill()
    {
        echo "Valgau daug dyzelio";
    }
}

$elektrineMasina = new ElektrineMasina();
$elektrineMasina->charge();