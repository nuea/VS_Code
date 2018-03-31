<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-Superglobals</title>
</head>
<body>
    <?php
        /*$GLOBALS*/
        echo "<h2>$"."GLOBALS</h2>";
        $x = 75;
        $y = 25;
        function addition() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();
        echo $z;

        
        /*$_GET*/
        echo "<h2>$"."_GET</h2>"; 
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <input type="text" name="person" value="">
            <input type="submit" value="Submit">
        </from>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = $_GET['person'];
            $output = "Hey! ".$name;
            echo $output;
        }

        /*$_POST*/
        echo "<h2>$"."_POST</h2>";        
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
</body>
</html>