<?php

declare(strict_types=1); // Type Declaration
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>
<body>

    <?php

        // function sayHello(string  $name, $age, $weight) {
        //     echo "Hello " . $name . " You are " . $age . " Year's Old.";
        // }  

        // $test = sayHello("Cedric", 22, 68); /* (using return) */

        // echo $test;
        // echo sayHello("Cedric", 22, 68); (using echo)

        function calculate(int $num1, int $num2) {
            $result = $num1 + $num2;
            return $result;
        }

        echo calculate(25, 75);

       

    ?>


    
</body>
</html>