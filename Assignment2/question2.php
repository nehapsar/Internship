<?php

function Spy_Game_Checker($arr){

    $s =" ";

    foreach($arr as $x)
    {
          if($x == 0 || $x == 7)
          {
             $s.=$x;
          }

    }

    return $s=="007";
}
$arr=[1,2,4,0,0,7,5];

/*$arr=[1,0,2,4,0,5,7];
$arr=[1,7,2,0,4,5,0];*/

echo Spy_Game_Checker($arr);


?>
