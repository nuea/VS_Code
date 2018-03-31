<?php
    include 'db.inc.php';
    
    $Username=$_POST["username"];
    $Email=$_POST["email"];
    $Pwd=$_POST["password"];
    $RetypePwd=$_POST["password2"];

   if(empty($Username) && empty($Email) && empty($Pwd) && empty($RetypePwd))
    {
        $msg = "You must provide all information.";
        header("Location:http://localhost/Register.php?msg=$msg");
    } 
    else if(empty($Username))
    {
        $msg = "You use an invalid Username.";
        header("Location:http://localhost/Register.php?msg=$msg&Email=$Email&Username=$Username");
    } 
    else if(empty($Email))
    {
        $msg = "You use an invalid Email.";
        header("Location:http://localhost/Register.php?msg=$msg&Username=$Username&Email=$Email");
    }
    else if($Pwd != $RetypePwd)
    {
        $msg = "You use an Password does not match";
        header("Location:http://localhost/Register.php?msg=$msg");
    }
    else{
        $sql = "INSERT INTO register (Username , Email, Pwd, RetypePwd) 
            VALUES ('".$Username."','".$Email."','".$Pwd."','".$RetypePwd."')";

        $query = mysqli_query($conn,$sql);

        if($query) {
            echo "Record add successfully";
        }

        mysqli_close($conn);
        header("Location:http://localhost/Register.php");
    }/**/
?>
