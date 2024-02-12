<?php

/*Scenario: You are an IT Support Administrator Specialist and are charged with the task of creating email accounts for new hires.
Generate an email with the following syntax: firstname. lastname.department@companyname
Determine the department (sales, development, accounting), if none leave blank
Generate a random String for a password
Have set methods to change the password, set the mailbox capacity, and define an alternate email address
Have get methods to display the name, email, and mailbox capacity*/
                                                                                                                                                                                                                                                                                                                >
class User {
    
    protected $firstName;
    protected $lastName;
    public $choice = 0;
    public $department;

    public function __construct($firstName, $lastName, $department) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->department = $department;
    }
  
    protected function userInput(){        
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
    
    public function collectUserInput() {
        $this->userInput();
    }

    public function getDepartment($department) {
        return $department;
    }
}

class DisplayUserDetails extends User {
    
    public $alternateEmailAddress;
    public $password;
    public $email;
    public $mailBoxCapacity;

    public function __construct($firstName, $lastName, $department) {
        parent::__construct($firstName, $lastName, $department);
    }
    
    public function setEmail() {
        $this->email = $this->firstName . $this->lastName .".".$this->department ."@smartlybuilt.com";
    }

    public function getEmail(){
        return $this->email;
    }

    private function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function setAlternateEmailId(){
        print_r("Set your alternate mail id\n");
        $this->alternateEmailAddress = readline();
        if ($this->isValidEmail($this->alternateEmailAddress)) {
            print_r("Alternate email id set up successfully\n");
        } else {
            echo "Invalid email address. Please enter a valid email.\n";
           }
    }

    public function getAlternateEmailId(){
        return $this->alternateEmailAddress;
    }

    public function setRandomPassword() {
        $this->password = (chr(rand(65, 90)) . rand(100, 999) . chr(rand(97, 122)) . chr(rand(33, 126)));
    }

    public function getRandomPassword(){
        return $this->password;
    }

    public function setMailBoxCapacity($mailBoxCapacity){
        $this->mailBoxCapacity = $mailBoxCapacity;
    }

    public function getMailBoxCapacity(){
        return $this->mailBoxCapacity;
    }

    public function setPassWordByUser() {        
        $newPasswordOne = '';
        $newPasswordTwo = '';
        print_r("Do you want to change the password :\nPress(Y/N)");
        $passWordChoice = strtolower(readline());
        if ($passWordChoice == 'y') {
            print_r("Enter your new password \n your password should contain at least one Uppercase, one Lowercase, one number, one special character\n");
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
            print("Thank you\n");
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

    public function displayUserDetails(){
        echo "Name : ".$this->firstName." ".$this->lastName."\n";
        echo "Email :".$this->email."\n"; // Added "\n" for better formatting
        echo "Password : ".$this->password."\n";
        if ($this->isValidEmail($this->alternateEmailAddress)) {
        echo "Alternate Email: ".$this->alternateEmailAddress."\n";
         } else {
               echo "Alternate Email: (Blank)\n";
        }
        echo "Mail Box Capacity : ".$this->mailBoxCapacity."\n";
    }
}

$userOne = new DisplayUserDetails('', '', '');
$userOne->collectUserInput();
$userOne->setEmail();
$userOne->setAlternateEmailId();
$userOne->setRandomPassword();
$userOne->setMailBoxCapacity("15GB");
$userOne->setPassWordByUser();
$userOne->displayUserDetails();

?>



       
