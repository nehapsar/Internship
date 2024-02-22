<?php

namespace App\controllers;

class CalculateController{

    public $addition = [] ;
    public $subtraction =[];
    public $multplication =[];
    public $division=[];
    public $reminder=[];

    public function add($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo)){
            return ["error" => "Invalid Input"];
        }

        $result = $numOne + $numTwo;
        $data = ['operation' => 'add','numOne' => $numOne,'numTwo' => $numTwo,'result' => $result,];
        $jsonFile = "arithmeticOperation.json";
        $currentData = file_get_contents($jsonFile);
        $currentArray = json_decode($currentData, true);
        $currentArray['addition'][] = $data;
        $jsonData = json_encode($currentArray);
        file_put_contents($jsonFile, $jsonData);

        return $result;
    }

    public function subtract($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo)) {
            return ["error" => "Invalid Input"];
        }
        
        $result = $numOne - $numTwo;
        $data = ['operation' => 'sub','numOne' => $numOne,'numTwo' => $numTwo,'result' => $result,];
        $jsonFile = "arithmeticOperation.json";
        $currentData = file_get_contents($jsonFile);
        $currentArray = json_decode($currentData, true);
        $currentArray['subtraction'][] = $data;
        $jsonData = json_encode($currentArray);
        file_put_contents($jsonFile, $jsonData);

        return $result;
    }
    
    public function multiplication($numOne,$numTwo){
        if (!is_int($numOne) || !is_int($numTwo)) {
            return ["error" => "Invalid Input"];
        }
        
        $result = $numOne * $numTwo;
        $data = ['operation' => 'multiply', 'numOne' => $numOne, 'numTwo' => $numTwo, 'result' => $result,];
        $jsonFile = "arithmeticOperation.json";
        $currentData = file_get_contents($jsonFile);
        $currentArray = json_decode($currentData, true);
        $currentArray['multplication'][] = $data;
        $jsonData = json_encode($currentArray);
        file_put_contents($jsonFile, $jsonData);
        
        return $result;
    }
    
    public function division($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo) || $numTwo == 0 || ($numTwo == 0 && $numOne =0)){
            return ["error" => "Invalid Input"];
        }
        
        $result = $numOne/$numTwo;
        $data =["operation" =>"divsion","numOne"=>$numOne,"numTwo" =>$numTwo,"result" =>$result];
        $jsonFile="arithmeticOperation.json";
        $currentData = file_get_contents($jsonFile);
        $currentArray = json_decode($currentData ,true);
        $currentArray['division'][] = $data;
        $jsonData = json_encode($currentArray);
        file_put_contents($jsonFile,$jsonData);
        
        return $result;
    }
    
    public function reminder($numOne,$numTwo){
        if(!is_int($numOne) || !is_int($numTwo) || $numTwo == 0 || ($numTwo == 0 && $numOne =0)){
            return ["error" => "Invalid Input"];
        }
        
        $result = $numOne%$numTwo;
        $data =["operation" =>"divsion","numOne"=>$numOne,"numTwo" =>$numTwo,"result" =>$result];
        $jsonFile="arithmeticOperation.json";
        $currentData = file_get_contents($jsonFile);
        $currentArray = json_decode($currentData ,true);
        $currentArray['reminder'][] = $data;
        $jsonData = json_encode($currentArray);
        file_put_contents($jsonFile,$jsonData);
        
        return $result;
   }
}
