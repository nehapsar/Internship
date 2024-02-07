<?php

class Student {
    public $name;
    public $age;
    public $usn;
    const Section = "A section";

    public function __construct($name, $age, $usn) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->usn = $usn;
        $this->Section =self::Section;
    }
    
}

$i = 0;
$Student_one = new Student("Ravi", 22, "1RVMC10".++$i);
$Student_two = new Student("Raju", 24, "1RVMC10".++$i);
$Student_three = new Student("Sham", 20, "1RVMC10".++$i);


echo "NAME : ".$Student_one->name."\n";
echo "AGE : ".$Student_one->age."\n";
echo "USN : ".$Student_one->usn."\n";
echo "SEC : ".$Student_one->Section."\n";

?>
