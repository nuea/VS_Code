<?php
    if(isset($_POST['submit']))
    {
        include_once 'dbh.inc.php';
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        //Error handlers
        //Check for empty fields
        if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
            header("Location: ../signup.php?signup=empty");
            exit();
        }else{
            //Check is input characters are valid
            if(preg_match("/^[a-zA-Z]*$",$first)||preg_match("/^[a-zA-Z]*$",$last)){
                header("Location: ../signup.php?signup=invalid");
                exit();
            }else{
                //Check if email valid
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: ../signup.php?signup=invalidemail");
                    exit();
                }else{
                    $sql = "SELECT *FROM users WHERE user_uid='$user_id'";
                    $result = mysqli_query($conn,$sql);
                    $rsCheck = mysqli_num_rows($result);
                    if($rsCheck>0){
                        header("Location: ../signup.php?signup=usertaken");
                        exit();
                    }
                    else{
                        //Hashing the password
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        //Insert the user into the database
                        $sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) 
                        VALUES ('".$first."','".$last."','".$email."','".$uid."','".$hashedPwd."')";
                        $query = mysqli_query($conn,$sql);
                        header("Location: ../signup.php?signup=success");
                        exit();
                    }
                }
            }
        }
    }else{
        header("Location: ../signup.php");
        exit();
    }
?>