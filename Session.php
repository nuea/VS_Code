<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-Session</title>
</head>
<body>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>
    <?php
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"]="Green";
    $_SESSION["favanimal"]="Turtle";
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    echo "<br>All session variables are now removed, and the session is destroyed." 
    ?>
</body>
</html>