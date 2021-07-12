<?php 
    class Product{
        public $name;
        public $price;
        public $description;
        public $isBuy;
        public $category;
        public $isAvailable;

        function __construct ($name, $price, $description, $isBuy, $category, $isAvailable){
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->isBuy = $isBuy;
            $this->category = $category;
            $this->isAvailable = $isAvailable;
        }
        
        function isBuyed(){
            $isBuy = true;
        }

    }
?>