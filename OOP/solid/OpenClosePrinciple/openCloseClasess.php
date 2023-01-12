<?php

interface EmployeeInterface {
    public function getSallary(): float;
}

class NuolatinisEmployee implements EmployeeInterface {
    private $monthlySalary;

    public function getSallary(): float
    {
        return $this->monthlySalary;
    }
}

class ValandinisEmployee implements EmployeeInterface {
    private $hourRate;
    private $hourWorked;

    public function getSallary(): float
    {
        return $this->hourRate * $this->hourWorked;
    }
}

class PatyresEmployee implements EmployeeInterface {
    private $monthlySalary;
    private $bonusRatio;

    public function getSallary():float {
        return $this->monthlySalary + $this->monthlySalary * $this->bonusRatio;
    }
}
class puseEtaoEmployee implements EmployeeInterface {
    private $monthlySalary;

    public function getSallary():float {
        return  $this->monthlySalary * 0.5;
    }
}

class SalaryCalculator {
    public function calculate(array $employees) {
        $sum = 0;
        /** @var EmployeeInterface $employee */
        foreach ($employees as $employee) {
            $sum += $employee->getSallary();
        }

        return $sum;
    }
}