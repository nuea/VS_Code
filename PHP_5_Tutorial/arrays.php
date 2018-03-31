<?php
    /*
    Create an Array in PHP:
    In PHP, the array() function is used to create an array: array();
    In PHP, there are three types of arrays:
        Indexed arrays - Arrays with a numeric index
        Associative arrays - Arrays with named keys
        Multidimensional arrays - Arrays containing one or more arrays
    */
    echo "<h3>Indexed Arrays</h3>: ";
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo "<br><h3>Get The Length of an Array - The count() Function</h3>: ";
    echo count($cars);
    echo "<br><h3>Loop Through an Indexed Array</h3><br>";
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    echo "<h3>Associative Arrays</h3>: ";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";

    echo "<br><h3>Loop Through an Associative Array</h3><br>";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo "<br><h3>Multidimensional Arrays</h3>";
    echo "<h3>Two-dimensional Arrays</h3>";
    $cars = array
    (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    echo "OR<br>";
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }
?>