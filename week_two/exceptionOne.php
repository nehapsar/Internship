<?php

function checkUserInput($inputNumber) {
    if (!is_numeric($inputNumber) || strpos($inputNumber, '.') !== false) {
        throw new Exception("Invalid input.");
    }
    echo "Enter OTP\n";
}

echo "Enter your mobile number: ";
$userInput = readline();

try {
    checkUserInput($userInput);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage() . "\n";
}

?>
