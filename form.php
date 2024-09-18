<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link rel="stylesheet" href="css/form_handling.css">
</head>
<body>
    
    <main>
        <form action="includes/form_handling.php" method="POST">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname</label>
            <input type="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favoritePet">Favorite Pet?</label>
            <select id="favoritePet" name="favoritePet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Car</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
    
</body>
</html>