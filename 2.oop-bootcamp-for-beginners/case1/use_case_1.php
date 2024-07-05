<?php
    // A basket contains the following things:
    // Banana's (6 pieces, costing €1 each)
    // Apples (3 pieces, costing €1.5 each)
    // Bottles of wine (2 bottles, costing €10 each)
    // Without using classes, do the following in your code:
    // Calculate the total price
    // Calculate how much of the total price is tax (fruit goes at 6%, wine is 21%)

    // $basket = [
    //     'bananas' => [
    //         'quantity' => 6,
    //         'price' => 1.0,
    //         'tax_rate' => 0.06
    //     ],
    //     'apples' => [
    //         'quantity' => 3,
    //         'price' => 1.5,
    //         'tax_rate' => 0.06
    //     ],
    //     'wine' => [
    //         'quantity' => 2,
    //         'price' => 10.0,
    //         'tax_rate' => 0.21
    //     ]
    // ];
    
    // $totalPrice = 0.0;
    // $totalTax = 0.0;

    // // Calculate the total price and tax
    // foreach($basket as $item){
    //     $itemTotal = $item['quantity'] * $item['price'];
    //     $itemTax = $itemTotal * $item['tax_rate'];
    //     $totalPrice += $itemTotal;
    //     $totalTax += $itemTax;
    // }

    // // Output the results
    // // The number_format() function formats a number with grouped thousands.
    // // ! Note: This function supports one, two, or four parameters (not three).
    // echo "Total Price: €" . number_format($totalPrice, 2) . "<br>";
    // echo "Total Tax: €" . number_format($totalTax, 2) . "<br>";
    
    // *do the same with classes

    // forces PHP to strictly enforce variable types, thus reducing errors due to incorrect types.
    declare(strict_types=1);

    // call the classes we need, in the folder classes
    require_once("classes/basket.class.php");
    require_once("classes/item.class.php");

    // create items 
    $bananas = new item('Bananas', 6, 1.0, 0.06);
    $apples = new item('Apples', 3, 1.5, 0.06);
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
