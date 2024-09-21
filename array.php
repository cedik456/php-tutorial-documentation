<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    // Arrays and Methods --

    $fruits = [
        "apple",
        "orange",
        "banana",
        "grapes",
        "peach"
    ];

    
    // Unset --
    unset($fruits[1]);
    
    // Splice --
    array_splice($fruits, 1, 2);
    
    $sourFruits = ["Sampalok", "Guyabano"];

    array_splice($fruits, 0,1, $sourFruits);
    print_r($fruits);

    // Foreach --
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    // Associative Arrays --
    $habits = [
        "book reading" => "Cedric",
        "playing guitar" => "Charles",
        "working out" => "Emman",
        "playing soccer" => "Christian",
        "designing" => "Mark"
    ];

    echo $habits["book reading"];

    // Print --
    print_r($habits);

    // Count --
    echo count($habits);

    // Sort --
    echo sort($habits);

    // Array Push --

    // for non-associative arrays -
    array_push($fruits, "Avocado");
    print_r($fruits);

    // for associative arrays -
    $habits["singing"] = "Tara";
    print_r($habits);

    // Multi dimensional Arrays --

    $food = [
        "fruits" => array("apple", "mango"),
        "meat" => array("chicken", "beef"),
        "vegetables" => array("carrots", "cabbage") 
    ];

    echo $food["fruits"][1];
    
?>