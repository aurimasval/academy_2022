<?php

class SalaryCalculator {
    public function calculate(array $employees) {
        $sum = 0;
        /** @var Employee $employee */
        foreach ($employees as $employee) {
            if ($employee->getType() === 'nuolatinis') {
                $sum += $employee->getMonthlySalary();
            } elseif ($employee->getType() === 'valandinis') {
                $sum += $employee->getHoursWorked() * $employee->getHourPrice();
            } elseif ($employee->getType() === 'bonusinis') {
                $sum += $employee->getHoursWorked() * $employee->getHourPrice();
            }
        }

        return $sum;
    }
}