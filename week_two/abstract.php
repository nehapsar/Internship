<?php

/*Write the following code in your editor below:
    1. A class named Arithmetic with a method named add that takes  integers as parameters and returns an integer denoting their sum.
    2. A class named Adder that inherits from a parent class named Arithmetic.*/


     abstract class Arithmetic {
      protected abstract function add($numberOne,$numberTwo);
     }

    class Adder extends Arithmetic{
      public function add($numberOne,$numberTwo){
        return $numberOne+$numberTwo;
      }
    }

    $adderOne = new Adder();
    echo $adderOne->add(20,30);

?>
