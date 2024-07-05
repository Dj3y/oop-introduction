<?php
/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

// force PHP à appliquer strictement les types des variables, ce qui permet de réduire les erreurs dues aux types incorrects.
declare(strict_types=1);

// appel du fichier qui contient la classe beverage
require 'classes/beer.class.php';

// Instancier un objet
$duvel = new beer('blond', 3.5, 'Duvel', 8.5);

// affichage des infos
echo $duvel->getAlcoholPercentage() . '<br>';
echo 'Alcohol percentage ' . $duvel-> getAlcoholPercentage() . '<br>';
echo $duvel->color . '<br>';

// affichage de l'erreur: l'erreur est affiché car dans la classe beverage la méthode getAlcoholPercentage() n'existe pas 
// $beverage = new beverage('red', 2.0);
// echo $beverage->getAlcoholPercentage();