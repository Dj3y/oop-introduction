<?php
    // Consider the same basket as in use case 1. 
    // The shop owner wants to have a way to have 50% off every fruit. 
    // Can you find a way to implement the discount once, and re-use it efficiently for every fruit?
    // forces PHP to strictly enforce variable types, thus reducing errors due to incorrect types.
    declare(strict_types=1);

    // call the classes we need in the folder classes
    require_once("classes/basket.class.php");
    require_once("classes/item.class.php");

    // create items 
    $bananas = new item('Bananas', 6, 1.0, 0.06, true);
    $apples = new item('Apples', 3, 1.5, 0.06, true);
    $wine = new item('Wine', 2, 10, 0.21);
    
    // Create basket and add items
    $basket = new basket();
    $basket->addItem($bananas);
    $basket->addItem($apples);
    $basket->addItem($wine);

    // Calculate and print the total price and total tax
    // The number_format() function formats a number with grouped thousands.
    // ! Note: This function supports one, two, or four parameters (not three).
    echo "Total Price: €" . number_format($basket->getTotalPrice(), 2) . "<br>";
    echo "Total Tax: €" . number_format($basket->getTotalAmount(), 2) . "<br>";
