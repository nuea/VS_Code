<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-function</title>
</head>
<body>
    <?php
        // Function สำเร็จรูป
        /*echo "Hey! Miki"; 
        echo "<br>";  
        echo "strlen: ".strlen("Hey! Miki");  
        echo "<br>";      
        echo "str_word_count: ".str_word_count("Hey! Miki");
        echo "<br>";       
        echo "str_replace: ".str_replace("Miki","Moo","Hey! Miki");
        echo "<br>";  
        $newstring = 'abcdef abcdef';
        $pos = strpos($newstring, 'a', 1);
        echo "strpos: ".$pos;  */

        // Function เขียนเอง
        function newCalc($x){
            $num = $x * 0.75;
            echo "Here is 75 % of what you worte: ".$num;
        }
        $a = 10;
        newCalc($a);
    ?>
</body>
</html>