<?php

class Student {
    
    public $name;
    public $age;
    public $usn;
    const section = "A section";

    public function __construct($name, $age, $usn) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->usn = $usn;
        $this->section =self::section;
    }
    
}

$i = 0;
$studentOne = new Student("Ravi", 22, "1RVMC10".++$i);
$studentTwo = new Student("Raju", 24, "1RVMC10".++$i);
$studentThree = new Student("Sham", 20, "1RVMC10".++$i);


echo "NAME : ".$studentOne->name."\n";
echo "AGE : ".$studentOne->age."\n";
echo "USN : ".$studentOne->usn."\n";
echo "SEC : ".$studentOne->section."\n";

?>
