<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

    <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="number" name="num01" placeholder="Number one">

    <select name="operator">
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>

    <input type="number" name="num02" placeholder="Number two">

    <button type="submit">Calculate</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Grab data
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // Error Handler
        $error = false;

        if (empty($num01) || empty($num02) || empty($operator) ) { 
            echo "<script>window.alert('Fill in all fields!')</script>";
            $error = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<script>window.alert('Only write numbers!')</script>";
            $error = true;
        }

        if (!$error) {  
            $value = 0;
            switch($operator) {
                case "addition": 
                    $value = $num01 + $num02;
                     break;
                case "subtraction": 
                    $value = $num01 - $num02; 
                     break;
                case "multiply": 
                    $value = $num01 * $num02;
                     break;
                case "divide": 
                    $value = $num01 / $num02;
                     break;
                default:
                    echo "Undefined";
                     break;
            }

            echo "<p>'Result is:</p>" . $value;
        }

    }

    ?>
    
</body>
</html>