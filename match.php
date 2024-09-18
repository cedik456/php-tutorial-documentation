<?php

    // MATCH IN PHP

    $a = 10;
    $b = 2;

    // $sum = match ($a) {
    //     1 => "Variable a is equal to one",
    //     2 => "Variable a is equal to two",
    //     3 => "Variable a is equal to three",
    //     default => "Unknown",
    // };

    $evenNumbers = match ($a) {
        2,4,6,8,10 => "This is an even number",
        1,3,5,7,9 => "This is an odd number",
        default => "Undefined"
    };

    echo  $a . "<br>" . $evenNumbers;

?>