<?php

for($i=1;$i<=100;$i++)
 {

      if($i % 15 ==0)
      {
          print "Fizz Buzz\n";
      }
      elseif($i%3==0)
      {
          print "Fizz\n";
      }
      else if ($i%5==0)
      { 
          print "Buzz\n";
      }
      else
      {
          print "$i\n";
      }
   
 }


?>
