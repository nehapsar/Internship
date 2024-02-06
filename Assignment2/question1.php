<?php
$countUpper=0;$countLower =0;

function count_no_char($s){
    global $countLower,$countUpper;
    for($i=0;$i<strlen($s);$i++){
        if(ctype_lower($s[$i])){
            $countLower++;
        }
        elseif(ctype_upper($s[$i])){
            $countUpper++;
        }
    }
}


$s='Hello Mr. Rogers, how are you this fine Tuesday?';
count_no_char($s);

echo "Upper Case =".$countUpper."\n";
echo "Lower case =".$countLower."\n";
?>

