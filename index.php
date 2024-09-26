<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
</head>
<body>

    <!-- <h3>Sign Up</h3>
    <form action="./includes/form_handler.inc.php" method="post">
        <input type="text" name="username"  placeholder="Username" autocomplete="none">
        <input type="password" name="pwd"  placeholder="Password">
        <input type="email" name="email" placeholder="Email" autocomplete="none">
        <input type="submit" value="Submit">
    </form> -->

    <!-- <h3>Change Account</h3>
    <form action="./includes/user_update.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>Update</button>
    </form> -->

    <!-- <h3>Delete Account</h3>
    <form action="./includes/user_delete.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
    </form> -->

    <form class="search-form" action="search.php" method="post">
        <label for="search">search</label>
        <input id="search" type="search" name="usersearch" placeholder="Search...">
        <button>Search</button>
    </form>

</body>
</html>