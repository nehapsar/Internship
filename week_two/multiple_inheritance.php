<?php

class Vehicle {
   
  public $noOfWeehls;
  public $price;
  public $color;

  public function __construct($noOfWeehls, $price, $color) {
        $this->noOfWeehls = $noOfWeehls;
        $this->price = $price;
        $this->color = $color;
    }
}


//class car extending the properties from vehicle

class Car extends Vehicle {

  
  public $engineNumber;
  public $engineCapacity;
  public $mpg;
  

  public function __construct($noOfWeehls, $price, $color, $engineNumber, $engineCapacity, $mpg) {
    
        parent::__construct($noOfWeehls, $price, $color);
        $this->engineNumber = $engineNumber;
        $this->engineCapacity = $engineCapacity;
        $this->mpg = $mpg;

    
    }
}


class Bmw extends Car {
  
    public $horsePower;
    public $electronicBrakeDistribution;
    public $numberOfSeats;


    public function __construct($noOfWeehls, $price, $color, $engineNumber, $engineCapacity, $mpg,$horsePower, $electronicBrakeDistribution, $numberOfSeats) {
            parent::__construct($noOfWeehls, $price, $color, $engineNumber, $engineCapacity, $mpg);
            $this->horsePower=$horsePower;
            $this->electronicBrakeDistribution=$electronicBrakeDistribution;
            $this->numberOfSeats=$numberOfSeats;
            
        }
    
  }



 $bmwOne = new Bmw(4, 50000, 'Black', '723', '2000cc', 25,'444hp','yes availabe',7);



 echo "Number Of Wheels : ".$bmwOne->noOfWeehls . "\n";
 echo "Price : ".$bmwOne->price."\n";
 echo "Color".$bmwOne->color."\n";
 echo "Engine Number : ".$bmwOne->engineNumber."\n";
 echo "Engine Capacity : ".$bmwOne->engineCapacity."\n";
 echo "Mpg : ".$bmwOne->mpg."\n";
  echo "Horse Power : ".$bmwOne->horsePower."\n";
 echo "Electronic Break Distribution : ".$bmwOne->electronicBrakeDistribution."\n";
 echo "Number Of Seats : ".$bmwOne->numberOfSeats."\n";

 ?>
