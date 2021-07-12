<?php 
    class Product{
        public $name;
        public $price;
        public $description;
        public $isBuy;
        public $category;
        public $isAvailable;
        public $urlCover;

        function __construct ($name, $price, $description, $isBuy, $category, $isAvailable, $urlCover){
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->isBuy = $isBuy;
            $this->category = $category;
            $this->isAvailable = $isAvailable;
            $this->urlCover = $urlCover;

        }
        
        function isBuyed($purchased){
            $this->isBuy = $purchased;
        }

    }
?>