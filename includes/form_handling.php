<?php

    // -- different ways of handling form submissions

    // var_dump($_SERVER["REQUEST_METHOD"]);

    // if(isset($_POST["submit"])) {  

    // }

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstName = htmlspecialchars($_POST["firstname"]);
        $lastName = htmlspecialchars($_POST["lastname"]);
        $favoritePet = htmlspecialchars($_POST["favoritePet"]);

        if(empty($firstName) && empty($lastName)) {
            echo "<script>
                document.getElementById('errorModal').style.display = 'flex';
              </script>";
        } else {
            echo "These are the data that the user submitted";
            echo "<br>";
            echo $firstName;
            echo "<br>";
            echo $lastName;
            echo "<br>";
            echo $favoritePet;
        }


    } else {
        header("Location: ../form.php");
        exit();
    }

?>