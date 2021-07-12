<?php
trait CreditCard{
   
    public $card_number;
    public $card_type;
    public $card_expire;
    public $card_cvc;
        
    
    public function isCardCorrect($number, $type, $expire, $cvc){
            $isCorrect = [
                "isNumber" => true,
                "isType" => true,
                "isExpire" => true,
                "isCvc" => true
            ];

            if (!is_numeric($number) || strlen($number)>16){
                $isCorrect["isNumber"] = false;
            }

            if ($type != "Mastercard" && $type != "Visa" && $type != "American Express" && $type != "Maestro"){
                $isCorrect["isType"] = false;
            }

            if ($expire["Year"]<date("Y")){
                $isCorrect["isExpire"] = false;
            }else if ($expire["Year"] == date("Y")){
                if ($expire["Month"]>date("M")){
                    $isCorrect["isExpire"] = false;
                }
            } else if ($expire["Month"]> 15){
                $isCorrect["isExpire"] = false;
            }

            if (is_numeric($cvc) || strlen($cvc)>3){
                $isCorrect["isCvc"] = false;
            }

            return  $isCorrect;
        }

    
    }
?>