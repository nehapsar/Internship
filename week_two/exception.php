<?php 

function calculateSqureRoot($number){
  if($number<0){
    throw new Exception("canot be calculated the number less than zero");
  }
  return sqrt($number);
}

try{
  echo calculateSqureRoot(-3);
}catch(Exception $e){
  echo "".$e->getMessage()."\n";
  echo "".$e->getFile()."\n";
  echo "".$e->getLine()."\n";
}
  
?>
