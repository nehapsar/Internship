<?php

namespace App\controllers;

class CalculateController{

    public function add($numOne,$numTwo){
           if(!is_int($numOne) || !is_int($numTwo)){
           return ["error" => "Invalid Input"];
           }

       return $numTwo+$numOne;
    }
  
    public function subtract($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo)) {
            return ["error" => "Invalid Input"];
        }

       return $numTwo - $numOne;
    }
  
    public function multiplication($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo)){
            return ["error" => "Invalid Input"];
        }
      
        return $numOne * $numTwo;
    }
  
    public function division($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo) || $numTwo == 0 || ($numTwo == 0 && $numOne =0)){
            return ["error" => "Invalid Input"];
        }
  
      return $numOne / $numTwo;
    }

  public function reminder($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo) || $numTwo == 0 || ($numTwo == 0 && $numOne =0)){
            return ["error" => "Invalid Input"];
        }

        return $numOne % $numTwo;
    }
  
}
