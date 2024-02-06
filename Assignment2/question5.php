<?php

    function ConvertTime($time) 
    {
        $timestamp = strtotime($time);

        $MilitaryTime = date("H:i:s", $timestamp);

        return $MilitaryTime;

    }

        $time= '12:01:00AM';

        echo convertTime($time);

?>
