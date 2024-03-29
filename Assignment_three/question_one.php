<?php

class Bank {
    
    private $accountNumber;
    private $userName;
    protected $amount = 0;
    protected $balance = 0;

    public function __construct($userName) {
        $this->accountNumber = rand(1000, 2000);
        $this->userName = $userName;
    }
    
    public function getAccountNumber() {
        return $this->accountNumber;
    }
    
    public function getUserName() {
        return $this->userName;
    }
    
    public function deposite($amount) {
        $this->balance += $amount;
    }
    
    public function balance() {
        return $this->balance;
    }
    
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return $this->balance;
        }else {
            echo "Balance is not Sufficient\n";
        }
    }
}

$accountNum = null;
$accountHolderOne = null;

while (true) {
    
    echo "Welcome to SBI Bank.\n";
    echo "Please select the options.\n";
    echo "1. Account Creation\n2. Balance Inquiry\n3. Deposite\n4. Withdraw\n";
    $number = readline();    
    if ($number == 1) {
        echo "Enter your name: ";
        $name = readline();
        $accountHolderOne = new Bank($name);
        echo "\n";
        echo "Account Created Successfully\n";
        echo "Account Holder Name : " . $accountHolderOne->getUserName() . "\n";
        $accountNum = $accountHolderOne->getAccountNumber();
        echo "Account Number : " . $accountNum. "\n";        
    }elseif ($number == 2) {
        echo "Enter your Account Number : "; echo "\n";
        $enterAccountNumber = readline();        
        if ($enterAccountNumber == $accountNum) {
            echo "Account Holder Name : " . $accountHolderOne->getUserName() . "\n";
            echo "Account Number : " . $accountNum. "\n";
            echo "Account Balance: " . $accountHolderOne->balance(). "\n";
        }else {
            echo "Enter correct Account Number\n";
        }
    }elseif ($number == 3) {
        echo "Enter your Account Number : ";
        $enterAccountNumber = readline();        
        if ($enterAccountNumber == $accountNum) {
            echo "Enter the amount: \n";
            $amount = readline();
            echo "\n";
            echo "Amount Deposited Successfully\n";
            $accountHolderOne->deposite($amount);
            echo "Account Holder Name : " . $accountHolderOne->getUserName() . "\n";
            echo "Account Number : " . $accountNum. "\n";
            echo "Account Balance: " . $accountHolderOne->balance(). "\n";
        }else {
            echo "Enter correct Account Number\n";
        }
    }elseif ($number == 4) {
        echo "Enter your Account Number : ";
        $enterAccountNumber = readline();
        if ($enterAccountNumber == $accountNum) {
            echo "Enter the amount to withdraw\n";
            $amount = readline();
            echo "\n";
            $accountHolderOne->withdraw($amount);
            echo "Account Holder Name : " . $accountHolderOne->getUserName() . "\n";
            echo "Account Number : " . $accountNum. "\n";
            echo "Account Balance: " . $accountHolderOne->balance(). "\n";
        }else {
            echo "Enter correct Account Number\n";
        }
    }else {
        echo "Invalid option\n";
        break;
    }
}
?>


