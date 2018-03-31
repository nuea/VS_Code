<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Calculator.php" method="get">
        <input type="text" name="num1" id="num1" placeholder="Number 1">
        <input type="text" name="num2" id="num2" placeholder="Number 2">
        <select name="operator" id="operator">
            <option value="None">None</option>
            <option value="Sum">Sum</option>
            <option value="Delete">Delete</option>
            <option value="Mutiplay">Mutiplay</option>
            <option value="Divide">Divide</option>
        </select>
        <input type="submit" name="submit" Value="Calculate"/>
        <p>The answer!</p>
        <?php
            if(isset($_GET['submit'])){
                $result = $_GET['num1'];
                $result2 = $_GET['num2'];                
                $operator = $_GET['operator'];
                if($operator=="None"){
                    echo "You need to select a method!";
                }
                else if($operator=="Sum"){
                    echo $result + $result2 ;
                }
                else if($operator=="Delete"){
                    echo $result - $result2 ;
                }
                else if($operator=="Multiply"){
                    echo $result * $result2 ;
                }
                else if($operator=="Divide"){
                    echo $result / $result2 ;
                }
            }
        ?>
    </form>
</body>
</html>