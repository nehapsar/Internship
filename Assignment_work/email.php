
<?php

class User {
    protected $firstName;
    protected $lastName;
    public $choice = 0;
    public $department;

    function userInput() {

        print_r("Welcome to Smartly Built \n");
        print_r("Enter your first name :");
        $this->firstName = readline();
        print_r("Enter your last name :\n");
        $this->lastName = readline();

        if ($this->choice == 0) {

            print_r("Please select your department\n1.Sales\n2.Development\n3.Accounting\n4.Others\n");
            $this->choice = readline();

            if ($this->choice == 1) {
                $this->department = $this->getDepartment("sale");
            }
            elseif ($this->choice == 2) {
                $this->department = $this->getDepartment("dev");
            }
            elseif ($this->choice == 3) {
                $this->department = $this->getDepartment("acc");
            }
            else {
                $this->department = $this->getDepartment("");
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

