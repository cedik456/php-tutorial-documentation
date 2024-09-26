<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $userSearch = $_POST['usersearch'];

    try { 

        require_once("./includes/dbh.inc.php"); 

        $query = "SELECT * FROM Comments WHERE username = :usersearch";
 
        $stmt = $pdo->prepare($query); 

        $stmt->bindParam(":usersearch", $userSearch);
    
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $stmt = null;
        $pdo = null;

        // header("Location: ../index.php"); 
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage()); 
    }

} else {
    header("Location: ../index.php");
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>

    <h3>Search Results:</h3>
    <?php
        if (empty($results)) {
            echo "<div>";
            echo "<p>You have no comment!</p>";
            echo "</div>";
            echo '<a href="comment.php">Click here to add a comment</a>';
        } else {
            foreach ($results as $row) {
                echo "Name: " . htmlspecialchars($row['username']) . "<br>";
                echo "Comment: " . htmlspecialchars($row['comment_text']) . "<br>";
                echo "Date: " . htmlspecialchars( $row['created_at']) . "<br> <br>"; 
            }
        }
    ?>


    
</body>
</html>