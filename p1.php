<?php

function find($st){
    global $st;
    foreach($st as $word){
    if(strlen($word)%2==0){
        echo " "."even";
    }else{
        echo " ".$word."";
    }
    }
   
}



//$newString = str_replace("world", "PHP", $string);


$st = 'Print every word in this sentence that has an even number of letters';
$st=explode(' ',$st);
find($st)." ";



?>