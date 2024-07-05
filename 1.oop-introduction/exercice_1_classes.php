<?php
    /* EXERCISE 1
    TODO: Create a class beverage.
    TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    TODO: Have a default value "cold" in the construct for temperature.
    Remember for now we will use properties and methods that can be accessed from everywhere.
    TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
    print the getInfo on the screen.
    TODO: Print the temperature on the screen.

    USE TYPEHINTING EVERYWHERE!
    */
    // force PHP à appliquer strictement les types des variables, ce qui permet de réduire les erreurs dues aux types incorrects.
    declare(strict_types=1);

    // appel du fichier qui contient la classe beverage
    require 'classes/beverage.class.php';

    // Instancier un objet
    $cola = new beverage('black', 2);
    // affichage des infos
    echo $cola->getInfo() . '<br>';
    // PHP_EOL: constante pour faire un saut de ligne, ou fin de ligne, ou encore carriage return).
    echo "The temperature is " . $cola->temperature . PHP_EOL;