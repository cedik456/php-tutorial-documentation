<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Step 1: Check if the request method is POST

    // Step 2: Declare variables using POST superglobals
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try { // Step 3: Start try-catch block for error handling

        require_once("dbh.inc.php"); // Step 4: Include database connection

        // Step 5: Prepare SQL query
        $query = "INSERT INTO Users (username, pwd, email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query); // Step 6: Prepare statement for binding values

        // Bind parameters to the prepared statement
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $pwd);
        $stmt->bindParam(3, $email);

        // Step 7: Execute the prepared statement and handle success or failure
        if ($stmt->execute()) {
            echo "New record created successfully"; 
        } else {
            echo "Error Creating Record";
        }
        
        // Clean up
        $stmt = null;
        $pdo = null;

        header("Location: ../index.php"); 
        exit(); 
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage()); 
    }

} else {
    header("Location: ../index.php");
    exit(); 
}
