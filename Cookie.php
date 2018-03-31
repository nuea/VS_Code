<?php
        /*$_COOKIE*/
        /*
            Create Cookies With PHP: A cookie is created with the "setcookie()" function.
            Syntax: "setcookie(name, value, expire, path, domain, secure, httponly);"
            Only the name parameter is required. All other parameters are optional.
        */
        $cookie_name = "user";
        $cookie_value = "Alex Porter";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-Cookie</title>
</head>
<body>
    <?php
    echo "<h3>$"."_COOKIE</h3><br>";
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>
</body>
</html>