<?php

class User {

    protected $firstName;
    protected $lastName;
    public $choice = 0;
    public $department;

    function userInput(){
        print_r("Welcome to Smartly Built \n");
        print_r("Enter your first name :");
        $this->firstName = readline();
        print_r("Enter your last name :");
        $this->lastName = readline();

    if ($this->choice == 0) {
         print_r("Please select your department\n1.Sales\n2.Development\n3.Accounting\n4.Others\n");
         $this->choice = readline();
         if ($this->choice == 1) {
                $this->department = $this->getDepartment("sale");
            } elseif ($this->choice == 2) {
                $this->department = $this->getDepartment("dev");
            } elseif ($this->choice == 3) {
                $this->department = $this->getDepartment("acc");
            } elseif ($this->choice == 4) {
                $this->department = $this->getDepartment("");
            } else {
                print_r("Please select a valid department");
            }
        }
    }

    public function getDepartment($department) {
        return $department;
    }

    public function __construct($firstName, $lastName, $department) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->department = $department;
    }
}

class DisplayUserDetails extends User {
    
    public $password;
    public function __construct($firstName, $lastName, $department) {
        parent::__construct($firstName, $lastName, $department);
    }
    public function setPassword() {
        $this->password = (chr(rand(65, 90)) . rand(100, 999) . chr(rand(97, 122)) . chr(rand(33, 126)));
    }
    public function getPassword() {
        return $this->password;
    }
    public function displayEmail() {
        $suffix = "smartlybuilt@gmail.com";
        echo "Name: " . $this->firstName . " " . $this->lastName . "\n";
        echo "Email: " . $this->firstName . $this->lastName . $this->department . $suffix . "\n";
        echo "Password :".$this->password."\n";
    }

    public function setPasswordManually() {
        $newPasswordOne = '';
        $newPasswordTwo = '';
        print_r("Do you want to change the password :\nPress(Y/N)");
        $passWordChoice = strtolower(readline());
        if ($passWordChoice == 'y') {
            print_r("Enter your new password \n your password should contain atleast one Uppercase, one Lowercase, one number, one special character\n");
            $newPasswordOne = readline();
            if ($this->checkPasswordStrength($newPasswordOne)) {
                print_r("Reenter the password: ");
                $newPasswordTwo = readline();
            } else {
                echo "Password is not strong enough.";
                return;
            }
            if ($newPasswordOne == $newPasswordTwo) {
                echo "Password Change Successfully\n";
                $this->password = $newPasswordOne;
            } else {
                echo "Sorry, passwords do not match.\nTry again later.";
            }
        } elseif ($passWordChoice == 'n') {
            print("Thank you");
        } else {
            echo "Enter your correct choice";
        }
    }

    private function checkPasswordStrength($password) {
        return preg_match('/[A-Z]/', $password) &&
               preg_match('/[a-z]/', $password) &&
               preg_match('/[^A-Za-z0-9]/', $password) &&
               strlen($password) >= 4;
    }
}

$userOne = new DisplayUserDetails('', '', '');
$userOne->userInput();
$userOne->setPassword();
$userOne->displayEmail();
$userOne->setPasswordManually();

?>

