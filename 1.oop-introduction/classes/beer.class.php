<?php
    // appel du fichier qui contient la classe beverage
    require 'classes/beverage.class.php';

    class beer extends beverage{
        public string $name;
        public float $alcoholPercentage;
        public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold'){
            // Appel du constructeur de la classe parente
            parent::__construct($color, $price, $temperature);
            $this->name = $name;
            $this->alcoholPercentage = $alcoholPercentage;
        }

        // le nom de méthode commence par get car c'est pour récupérer une valeur 
        public function getAlcoholPercentage(){
            return $this->alcoholPercentage . '%';
        }
    }