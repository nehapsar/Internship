<?php


function Print_Even_Words($sting)
{
    global $string;

    foreach($string as $word)
    {
        if(strlen($word) % 2 == 0)
        {
            echo " "."even";
        }
        else{
            echo " ".$word."";
        }
    }
   
}


$string = 'Print every word in this sentence that has an even number of letters';

$string=explode(' ',$string);

Print_Even_Words($string);



?>

