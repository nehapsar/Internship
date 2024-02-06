<?php
function convertTime($time12) {
    $timestamp = strtotime($time12);
    $militaryTime = date("H:i:s", $timestamp);
    return $militaryTime;
}
$time12 = '12:01:00AM';
echo convertTime($time12);

?>
