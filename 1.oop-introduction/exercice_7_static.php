<?php
    /* EXERCISE 7

    Copy your solution from exercise 6

    TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
    TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

    Use typehinting everywhere!
    */
        // forces PHP to strictly enforce variable types, thus reducing errors due to incorrect types.
        declare(strict_types=1);

        class beverage{
            private string $color;
            private float $price;
            private string $temperature;
            private const barName = "Het Vervolg";
            private static string $address = "Melkmarkt 9, 2000 Antwerpen";
            public function __construct(string $color, float $price, string $temperature = 'cold'){
                $this->color = $color;
                $this->price = $price;  
                $this->temperature = $temperature;
            }
    
            // the name of the function begin with get because we need to retrieve a value
            public function getInfo(){
                return "This beverage is {$this->temperature} and {$this->color}.";
            }
            // function to print the value of the const barName
            public function printBarName(){
                echo "Bar name: " . self::barName . "<br>";
            }
            // function to print the value of the static address
            public static function getAddress() {
                return self::$address;
            }
        }
    
        class beer extends beverage{
            private string $name;
            private float $alcoholPercentage;
            public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold'){
                // Calling the parent class constructor
                parent::__construct($color, $price, $temperature);
                $this->name = $name;
                $this->alcoholPercentage = $alcoholPercentage;
            }
    
            // the name of the function begin with get because we need to retrieve a value
            public function getAlcoholPercentage(){
                return $this->alcoholPercentage . '%';
            }
            public function getBeerBarName(){
                echo  parent::printBarName();
            }
        }
        
        $cola = new beverage('black', 2);
        // call the function to print the barName
        $cola->printBarName();
        $duvel = new beer('blond', 3.5, 'Duvel', 8.5);
        $duvel->getBeerBarName();
        // call the funcion to print the static address 
        // $cola->printAddress();

        echo beverage::getAddress();
