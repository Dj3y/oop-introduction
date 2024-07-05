<?php
    // We are preparing three types of content for a website:
    //     Articles
    //     Ads
    //     Vacancies
    // All of those have a title and text. When showing the title, they are modified as follows: articles remain as they are, ads are shown in all caps and vacancies are appended with " - apply now!". The original title should still be retrievable, so no modification is permanent.
    // Have an array with two articles, one ad and one vacancy. Use this array to show all content types (title + text).
    // Bonus: an article can be marked as "breaking news". If this is the case, the title is prepended with "BREAKING: ". Extra bonus: display all the content with the appropriate html tags.

    // forces PHP to strictly enforce variable types, thus reducing errors due to incorrect types.
    declare(strict_types=1);
    
    // call the classes we need in the folder classes
    require_once("classes/content.class.php");
    require_once("classes/article.class.php");
    require_once("classes/vacancy.class.php");
    require_once("classes/ad.class.php");

    // Create content items
    $contents = [
        new article("New PHP Version Released", "The latest PHP version includes new features and improvements.", true),
        new article("AI in 2024", "Artificial intelligence is transforming industries."),
        new ad("Best Deals on Electronics", "Get the best deals on electronics at our store."),
        new vacancy("Web Developer", "We are looking for an experienced web developer.")
    ];

    // Display all content
    foreach ($contents as $content) {
        $content->display();
    }