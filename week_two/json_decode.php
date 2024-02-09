<?php

$jsonString ='{"name":"neha","age":25,"city":"Banglore","collegeName":"R.V college","Department":"MCA"}';
$decodedData = json_decode($jsonString ,true);
print_r($decodedData);

?>
