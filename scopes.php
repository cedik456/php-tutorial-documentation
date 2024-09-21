<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>

    <?php

        // LOCAL AND GLOBAL SCOPES

        // $test = "Daniel"; // global variable

        // function myFunction() {

        //     global $test; // one way of using global variables in a local scope

        //     $localVar = "Hello World"; // local variable

        //     return $GLOBALS["test"]; // second way of using global variables in a local scope
        // }

        // echo myFunction();

        // STATIC SCOPES

        // function myFunction() {

        //     static $staticVar = 0; // using these the function will be continued or shared with others

        //     $staticVar++;

        //     return $staticVar;
        // }

        // echo myFunction(); // Output: 1
        // echo myFunction(); // Output: 2
        // echo myFunction(); // Output: 3
    
    ?>
    
</body>
</html>