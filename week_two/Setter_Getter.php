<?php
   
   class Car {
   
       public $color;
       public $NoOfSeats;

       public $engineCapacity;

       public $price;

       public function setColor($color){
        $this->color = $color;
       }

       public function getColor(){
        return $this->color;
       }



       public function setNoOfSeats($NoOfSeats){
        $this->NoOfSeats = $NoOfSeats;
       }
       public function getNoOfSeats(){
        return $this->NoOfSeats;
       }



        public function setEngineCapacity($engineCapacity){
            $this->engineCapacity=$engineCapacity;
        }

        public function getEngineCapacity(){
            return $this->engineCapacity;
        }



        public function setPrice($price){
            $this->price =$price;
        }

        public function getPrice(){
            return $this->price;
        }

    }

    

        $volvo = new Car();

        $volvo->setcolor("Black");
        $volvo->setNoOfSeats("7");
        $volvo->setEngineCapacity("50000cc");
        $volvo->setPrice("700000");

         
        echo "Name  Volvo Cras\n";
        echo "My features are:\n";
        echo "Color : ".$volvo->getColor()."\n";
        echo "No_of_Seats : ".$volvo->getNoOfSeats()."\n";
        echo "Engine Capacity : ".$volvo->getEngineCapacity()."\n";
        echo "Price : ".$volvo->getPrice();






        

   




   



















?>
