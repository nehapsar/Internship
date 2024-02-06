<?php

$Count_Upper_Case=0;

$Count_Lower_Case =0;

function Count_no_characters($s){

    global $Count_Lower_Case,$Count_Upper_Case;

    $Characters = str_split($s);

    foreach($Characters as $a){

        if(ctype_lower($a))
        {
            $Count_Lower_Case++;
        }
        elseif(ctype_upper($a))
        {
            $Count_Upper_Case++;
        }
    }
}


$s='Hello Mr. Rogers, how are you this fine Tuesday?';

Count_no_characters($s);

echo "Upper Case =".$Count_Upper_Case."\n";
echo "Lower case =".$Count_Lower_Case."\n";

?>
