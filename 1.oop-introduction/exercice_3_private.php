<?php
    /* EXERCISE 3

    TODO: Copy the code of exercise 2 to here and delete everything related to cola.
    TODO: Make all properties private.
    TODO: Make all the other prints work without error.
    TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
    TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

    Make sure that you use the variables and not just this text line.

    TODO: Print this method on the screen on a new line.

    USE TYPEHINTING EVERYWHERE!
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
        public function getInfo(){
            return "This beverage is {$this->temperature} and {$this->color}.";
        }

        // le nom de méthode commence par get car c'est pour récupérer une valeur 
        public function getColor(){
            return $this->color;
        }
        // le nom de méthode commence par set car la valeur va être modifier
        // utiliser le set au debut des méthodes quand c'est pour définir, modifier ou mettre à jour
        public function setColor(string $color){
            $this->color = $color;
        }
    }

    class beer extends beverage{
        private string $name;
        private float $alcoholPercentage;
        public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold'){
            parent::__construct($color, $price, $name);
            $this->name = $name;
            $this->alcoholPercentage = $alcoholPercentage;
        }
        // le nom de méthode commence par get car c'est pour récupérer une valeur 
        public function getAlcoholPercentage(){
            return $this->alcoholPercentage;
        }

        private function beerInfo(){
            return "Hi i'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->getColor()} color. ";
        }

        public function printBeerInfo(){
            return $this->beerInfo();
        }
    }

    // Instancier un objet
    $duvel = new beer('blond', 3.5, 'Duvel', 8.5);

    // affichage des infos
    echo $duvel->getAlcoholPercentage() . '<br>';
    echo 'Alcohol percentage: ' . $duvel-> getAlcoholPercentage() . '<br>';
    echo 'Color: ' . $duvel->getColor() . '<br>';
    // changer de couleur
    echo $duvel->setColor('light');
    // affichage nouvelle couleur
    echo 'New color: ' . $duvel->getColor() . '<br>';
    echo $duvel->printBeerInfo() . '<br>';
