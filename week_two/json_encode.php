<?php

$data = array(
    "name" => "neha",
    "age" => 25,
    "city" => "Banglore",
    'collegeName' => "R.V college",
    "Department" => "MCA"
);

$jsonString= json_encode($data);
echo $jsonString;

?>
