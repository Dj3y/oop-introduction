<?php
    /* EXERCISE 6

    Copy the classes of exercise 2.

    TODO: Change the properties to private.
    TODO: Make a const barname with the value 'Het Vervolg'.
    TODO: Print the constant on the screen.
    TODO: Create a function in beverage and use the constant.
    TODO: Do the same in the beer class.
    TODO: Print the output of these functions on the screen.
    TODO: Make sure that every print is on a new line.

    Use typehinting everywhere!
    */

    // forces PHP to strictly enforce variable types, thus reducing errors due to incorrect types.
    declare(strict_types=1);

    class beverage{
        private string $color;
        private float $price;
        private string $temperature;
        private const barName = "Het Vervolg";
        public function __construct(string $color, float $price, string $temperature = 'cold'){
            $this->color = $color;
            $this->price = $price;  
            $this->temperature = $temperature;
        }

        // the name of the function begin with get because we need to retrieve a value
        public function getInfo(){
            return "This beverage is {$this->temperature} and {$this->color}.";
        }
        public function printBarName(){
            echo "Bar name: " . self::barName . "<br>";
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
    // print the constant on the screen using the function, the constant is private
    $cola->printBarName();
    $duvel = new beer('blond', 3.5, 'Duvel', 8.5);
    $duvel->getBeerBarName();