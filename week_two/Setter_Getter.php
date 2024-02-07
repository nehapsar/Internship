<?php
   
   class Car {
   
       public $Color;
       public $No_of_Seats;

       public $Engine_Capacity;

       public $price;

       public function set_Color($Color)
       {
        $this->Color = $Color;
       }

       public function get_Color()
       {
        return $this->Color;
       }



       public function set_No_of_Seats($No_of_Seats)
       {
        $this->No_of_Seats = $No_of_Seats;
       }
       public function get_No_of_Seats()
       {
        return $this->No_of_Seats;
       }



        public function set_Engine_Capacity($Engine_Capacity)
        {
            $this->Engine_Capacity=$Engine_Capacity;
        }

        public function get_Engine_Capacity()
        {
            return $this->Engine_Capacity;
        }



        public function set_Price($Price)
        {
            $this->Price =$Price;
        }

        public function get_Price()
        {
            return $this->Price;
        }

    }

    

        $volvo = new Car();

        $volvo->set_Color("Black");
        $volvo->set_No_of_Seats("7");
        $volvo->set_Engine_Capacity("50000cc");
        $volvo->set_Price("700000");

         
        echo "Name  Volvo Cras\n";
        echo "My features are:\n";
        echo "Color : ".$volvo->get_Color()."\n";
        echo "No_of_Seats : ".$volvo->get_No_of_Seats()."\n";
        echo "Engine Capacity : ".$volvo->get_Engine_Capacity()."\n";
        echo "Price : ".$volvo->get_Price();






        

   




   



















?>
