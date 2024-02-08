<?php


class Student {
  
   private  $id ;  
   protected $name ;  
   public $email;
  

   public function __construct ($id,$name,$email){

    $this->id = $id;
    $this->name= $name;
    $this->email=$email;

   }
  

   public function getId(){
    return $this->id;
   }
  

   public function getName(){
    return $this->name;
   }
  
}



class Department extends Student {
  
  
    private $percentage;
    private $scholorshipAmount;
  

    public function __construct ($id,$name,$email,$percentage,$scholorshipAmount){

        parent :: __construct($id,$name,$email);
        $this->percentage = $percentage;
        $this->scholorshipAmount=$scholorshipAmount;

    }
  

    public function getPercentage(){
        return $this->percentage;
    }
  

    public function getScholorshipAmount(){
        return $this->scholorshipAmount;
    }

  
}

$studentOne = new Department(1,"aiza","aa@gmail.com","52%",2000);


print_r("ID : ".$studentOne->getId()."\n");
print_r("Name : ".$studentOne->getName()."\n");
print_r("Email id : ".$studentOne->email."\n");
print_r("Percentage : ".$studentOne->getPercentage()."\n");
print_r("Scholrship amount : ".$studentOne->getScholorshipAmount()."\n");



?>
