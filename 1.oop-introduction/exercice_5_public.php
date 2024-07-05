<?php
    /* EXERCISE 5

    Copy the class of exercise 1.

    TODO: Change the properties to private.
    TODO: Fix the errors without using getter and setter functions.
    TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
    */

    // force PHP à appliquer strictement les types des variables, ce qui permet de réduire les erreurs dues aux types incorrects.
    declare(strict_types=1);
    class beverage{
        private string $color;
        private float $price;
        private string $temperature;
        public function __construct(string $color, float $price, string $temperature = 'cold'){
            $this->color = $color;
            $this->price = $price;  
            $this->temperature = $temperature;
        }

        // le nom de méthode commence par get car c'est pour récupérer une valeur 
        public function getInfo(){
            return "This beverage is {$this->temperature} and {$this->color}.";
        }

            // Méthode publique pour afficher le prix (sans getter)
        public function printPrice(): void {
            echo "Price: {$this->price} euro" . PHP_EOL;
        }

        // Méthode publique pour changer le prix (sans setter)
        public function changePrice(float $newPrice): void {
            $this->price = $newPrice;
        }

        // Méthode publique pour afficher les informations générales
        public function printInfo(): void {
            echo $this->getInfo() . PHP_EOL;
        }

        // Méthode publique pour afficher la température (sans getter)
        public function printTemperature(): void {
            echo "Temperature: {$this->temperature}" . PHP_EOL;
        }
    }

    // Instancier un objet
    $cola = new beverage('black', 2);
    // affichage des infos
    echo $cola->getInfo() . '<br>';
    // PHP_EOL: constante pour faire un saut de ligne, ou fin de ligne, ou encore carriage return).
    echo $cola->printTemperature() . PHP_EOL;