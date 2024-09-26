<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Step 1: Check if the request method is POST

    // Step 2: Declare variables using POST superglobals
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try { // Step 3: Start try-catch block for error handling

        require_once("dbh.inc.php"); // Step 4: Include database connection

        // Step 5: Prepare SQL query
        $query = "DELETE FROM Users WHERE username = :username AND pwd = :pwd ;";
 
        $stmt = $pdo->prepare($query); // Step 6: Prepare statement for binding values

        // Bind parameters to the prepared statement
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd); 

        // Step 7: Execute the prepared statement and handle success or failure
        if ($stmt->execute()) {
            echo "<script>alert('New record created successfully');</script>"; 
        } else {
            echo "<script>alert('Error creating record!');</script>";
        }
        
        // Clean up
        $stmt = null;
        $pdo = null;

        // header("Location: ../index.php"); 
        exit(); 
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage()); 
    }

} else {
    header("Location: ../index.php");
    exit(); 
}
