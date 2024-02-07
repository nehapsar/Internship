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
$StudentOne = new Student("Ravi", 22, "1RVMC10".++$i);
$StudentTwo = new Student("Raju", 24, "1RVMC10".++$i);
$StudentThree = new Student("Sham", 20, "1RVMC10".++$i);


echo "NAME : ".$StudentOne->name."\n";
echo "AGE : ".$StudentOne->age."\n";
echo "USN : ".$StudentOne->usn."\n";
echo "SEC : ".$StudentOne->section."\n";

?>
