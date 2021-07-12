<?php
    include __DIR__ . "/creditcard.php";
    include __DIR__ . "/address.php";

    //User
    class User {
        public $name;
        public $surname;
        public $date_birth;
        public $company_name;
        public $username;
        public $password;        
        use Address;

        function __construct ($name, $surname, $date_birth, $company_name, $username, $password,$street, $number, $postal_code, $region, $country){
            $this->name = $name;
            $this->surname = $surname;
            $this->date_birth = $date_birth;
            $this->company_name = $company_name;
            $this->username = $username;
            $this->password = $password;
            $this->street = $street;
            $this->number= $number;
            $this->postal_code = $postal_code;
            $this->region = $region;
            $this->country = $country;
        }

        
    }

    //Client
    class Client extends User{
        public $isPrime;
        use CreditCard;

        function __construct($name, $surname, $date_birth, $company_name, $username, $password,$street, $number, $postal_code, $region, $country, $isPrime, $credit_card_number){
            
            parent::__construct($name, $surname, $date_birth, $company_name, $username, $password, $name, $surname, $date_birth, $company_name, $username, $password, $street, $number, $postal_code, $region, $country);
            $this->isPrime = $isPrime;
            $this->credit_card_number = $credit_card_number;
            $this->isPrime = $isPrime;
            $this->credit_card_number = $credit_card_number;

        }
    }

    //Admin
    class Admin extends User{
        public $role;
        function __construct($name, $surname, $date_birth, $company_name, $username, $password, $street, $number, $postal_code, $region, $country, $role){
            parent::__construct($name, $surname, $date_birth, $company_name, $username, $password, $name, $surname, $date_birth, $company_name, $username, $password, $street, $number, $postal_code, $region, $country);

            $this->role = $role;

        }
    }

    //Supplier
    class Supplier extends User{
         public $isActive;

        function __construct($name, $surname, $date_birth, $company_name, $username, $password, $street, $number, $postal_code, $region, $country, $isActive){

            parent::__construct($name, $surname, $date_birth, $company_name, $username, $password, $name, $surname, $date_birth, $company_name, $username, $password, $street, $number, $postal_code, $region, $country);

            $this->isActive = $isActive;

        }
    }

?>