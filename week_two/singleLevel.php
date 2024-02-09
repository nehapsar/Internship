<?php

class Employee {

    private $employeeId;  
    public $employeeName;
    protected $salary;

    public function __construct($employeeId, $employeeName, $salary) {
        $this->employeeId = $employeeId;
        $this->employeeName = $employeeName;
        $this->salary = $salary;
    }
}

class TotalSalaryOfEmployee extends Employee {

    public function calculateBonus($bonusAmount) {
        return $this->salary * $bonusAmount;
    }
}

$employeeOne = new TotalSalaryOfEmployee("102", "john", 2500);

echo "Total Salary = ".$employeeOne->calculateBonus(2);

?>
