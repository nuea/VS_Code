<?php
    session_start();
    if(isset($_POST['submit'])){
        include 'dbh.inc.php';
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        //Error handlers
        //Check if input are empty
        if(empty($uid)||empty($pwd)){
            header("Location: ../index.php?login=empty");
            exit();
        }else{
            $sql = "SELECT *FROM users WHERE user_uid='$uid'";
            $result = mysqli_query($conn,$sql);
            $rsCheck = mysqli_num_rows($result);
            if($rsCheck >= 1){
                if($rs = mysqli_fetch_array($result)){
                    //De-hashing the password
                    $hashedPwdChedk = password_verify($pwd, $rs['user_pwd']);
                    if($hashedPwdChedk == false){
                        header("Location: ../index.php?login=error");
                        exit();
                    }else if($hashedPwdChedk == true){
                        //Log in the user here
                        $_SESSION['u_key'] = $rs['ukey'];
                        $_SESSION['u_first'] = $rs['user_first'];
                        $_SESSION['u_lest'] = $rs['user_lest'];
                        $_SESSION['u_email'] = $rs['user_email'];
                        $_SESSION['u_uid'] = $rs['user_uid'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            }else if($rsCheck < 1){
                header("Location: ../index.php?login=error");
                exit();
            }
        }
    }else{
        header("Location: ../index.php?login=error");
        exit();
    }
?>