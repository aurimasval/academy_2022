<?php

class Employee {
    private float $monhtlySalary;
    private int $hoursWorked;
    private float $hourPrice;
    private string $type;
    private float $bonus;

    public function __construct(float $monthlySalary, int $hoursWorked, float $hourPrice, string $type, float $bonus) {
        $this->monhtlySalary = $monthlySalary;
        $this->hoursWorked = $hoursWorked;
        $this->hourPrice = $hourPrice;
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function getMonthlySalary() {
        return $this->monhtlySalary;
    }

    public function getHoursWorked() {
        return $this->hoursWorked;
    }

    public function getHourPrice() {
        return $this->hourPrice;
    }
}
