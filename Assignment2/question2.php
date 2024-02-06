<?php

function check($arr,$s=""){
    for($i=0;$i<count($arr);$i++){
          if($arr[$i]==0 || $arr[$i]==7){
             $s.=$arr[$i];
          }
    }
    return $s==="007"? true:false;
}

$arr=[1,2,4,0,0,7,5];
/*$arr=[1,0,2,4,0,5,7];
$arr=[1,7,2,0,4,5,0];*/
echo check($arr);




?>

