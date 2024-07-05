<?php
class beverage{
        public string $color;
        public float $price;
        public string $temperature;
        public function __construct(string $color, float $price, string $temperature = 'cold'){
            $this->color = $color;
            $this->price = $price;  
            $this->temperature = $temperature;
        }

        // le nom de méthode commence par get car c'est pour récupérer une valeur 
        public function getInfo(){
            return "This beverage is {$this->temperature} and {$this->color}.";
        }
    }