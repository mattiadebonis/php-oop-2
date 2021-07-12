<?php
    include __DIR__ . "/partial/address.php";
    include __DIR__ . "/partial/creditcard.php";
    
    //User
    class User {
        public $name;
        public $surname;
        public $date_birth;
        public $company_name;
        public $username;
        public $password;        
        //use Address;

        function __construct ($name, $surname, $date_birth, $company_name, $username, $password){
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
        use CreditCard;
        public $isPrime;
        
        function __construct($name, $surname, $date_birth, $company_name, $username, $password, $isPrime){
            
            parent::__construct($name, $surname, $date_birth, $company_name, $username, $password, $credit_card_number);
            $this->isPrime = $isPrime;
            $this->credit_card_number = $credit_card_number;
        }
    }

    //Admin
    class Admin extends User{
        public $role;
        function __construct($name, $surname, $date_birth, $company_name, $username, $password, $role){
            $this->role = $role;
            parent::__construct($name, $surname, $date_birth, $company_name, $username, $password, $role);
        }
    }

    //Supplier
    class Supplier extends User{
         public $isActive;

        function __construct( $isActive){
            $this->isActive = $isActive;

            parent::__construct($name, $surname, $date_birth, $company_name, $username, $password);
        }
    }

?>