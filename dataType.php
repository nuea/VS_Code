<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-DataType&ArithmeticOperators</title>
</head>
<body>
    <?php
        echo "<h2>Data Type</h2><br>";
        //String
        $name = "Coding is fun!";       // "..." or '...'
        echo "String: ".$name."<br>";

        //Interger
        $num = 25;
        echo "Interger: ".$num."<br>";

        //Float
        $fo = 25.215; 
        echo"Float: ". $fo."<br>";

        //Boolean
        echo "Boolean: true and false<br>";
        
        //Array
        $arr =  array("a","b","c");
        echo "arr: a, b, c ";
        echo "Array: ".$arr['2']."<br>";

        //Arithmetic Operators 
        echo "<br><h2>Arithmetic Operators</h2><br>";
        echo "+ : 240+5 => ".(250+5)."<br>";
        echo "- : 110-5 => ".(110-5)."<br>";
        echo "* : 12*3 => ".(12*3)."<br>";
        echo "/ : 250/5 => ".(250/5)."<br>";
        echo "% : 9%2 => ".(9%2)."<br>";
        echo "** : 3**3 => ".(3**3)."<br>";
        
    ?>
</body>
</html>