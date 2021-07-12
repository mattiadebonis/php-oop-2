<?php 
    trait Address {
        public $street;
        public $number;
        public $postal_code;
        public $region;
        public $country;

        public function isAdressCorrect($street, $number, $postal_code, $region, $country){
            $isCorrect = [
                "isStreet" => true,
                "isNumber" => true,
                "isPostalCode" => true,
                "isRegion" => true,
                "isCountry" => true
            ];
            
            if (is_numeric($street)){
                $isCorrect["isStreet"] = false;
            }

            if (!is_numeric($number)){
                $isCorrect["isNumber"] = false;
            }

            if (strlen($postal_code)>5 || !is_numeric($postal_code)){
                $isCorrect["isPostalCode"] = false;
            }

            if (is_numeric($region)){
                $isCorrect["isRegion"] = false;
            }

            if (is_numeric($country)){
                $isCorrect["isCountry"] = false;
            }

            return  $isCorrect;
        }
    }

?>