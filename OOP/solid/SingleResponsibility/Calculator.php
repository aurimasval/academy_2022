<?php

class Calculator {
    //1 atsakomybe: geba suskaiciuoti kvadrata
    public function calculate(int $number) {
        return $number * $number;
    }
    public function sum(int $number) {
        return $number + $number;
    }

    //2 atsakomybe: geba saugoti rezultata failų sistemoje. Ne skaičiavimo logika. Ją reikia iškelti į kitą klasę.
//    public function storeData(int $number)
//    {
//        file_put_contents('results.txt', $this->calculate($number));
//    }
}
