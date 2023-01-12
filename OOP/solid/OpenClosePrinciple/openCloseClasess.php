<?php

interface EmployeeInterface {
    public function getSallary(): float;
}

class NuolatinisEmployee implements EmployeeInterface {
    private $monthlySalary;

    public function __construct($monthlySalary) {
        $this->monthlySalary = $monthlySalary;
    }

    public function getSallary(): float
    {
        return $this->monthlySalary;
    }
}

class ValandinisEmployee implements EmployeeInterface {
    private $hourRate;
    private $hourWorked;

    public function __construct($hourRate, $hourWorked)
    {
        $this->hourRate = $hourRate;
        $this->hourWorked = $hourWorked;
    }

    public function getSallary(): float
    {
        return $this->hourRate * $this->hourWorked;
    }
}

class PatyresEmployee implements EmployeeInterface {
    private $monthlySalary;
    private $bonusRatio;

    public function __construct($monthlySalary, $bonusRation) {
        $this->monthlySalary = $monthlySalary;
        $this->bonusRatio = $bonusRation;
    }

    public function getSallary():float {
        return $this->monthlySalary + $this->monthlySalary * $this->bonusRatio;
    }
}
class puseEtaoEmployee implements EmployeeInterface {
    private $monthlySalary;

    public function __construct($monthlySalary)
    {
        $this->monthlySalary = $monthlySalary;
    }

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

$nuolatinis = new NuolatinisEmployee(500);
$valandinis = new ValandinisEmployee(5, 20);
$patyres = new PatyresEmployee(600, 0.05);
$puse = new puseEtaoEmployee(500);

$calculatorius = new SalaryCalculator();
echo $calculatorius->calculate([$nuolatinis, $valandinis, $patyres, $puse]);