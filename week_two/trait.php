<?php

trait  taxAmount {
    public static function calculateTax($salary){
        return $salary -($salary*0.5);
    }
}


trait bonusAmount {
    public function calculateBonusAmount($salary){
        return $salary+(0.98*$salary);
    }
}

class Employee {
    use taxAmount;
    use bonusAmount;
    public $name;
    public $empId;
    public $salary;

    public function __construct($name,$empId,$salary){
        $this->name=$name;
        $this->empId=$empId;
        $this->salary=$salary;
    }
}

$employeeOne = new Employee("neha","E10",2000);

echo "Employee name : ".$employeeOne->name."\n";
echo "Tax amount deducted : ".$employeeOne->calculateTax($employeeOne->salary)."\n";
echo "Total salary : ".$employeeOne->calculateBonusAmount($employeeOne->salary);

?>
