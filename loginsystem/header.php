<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                    if(isset($_SESSION['u_uid'])){
                    ?>
                        <form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="submit">Logout</button>
                        </form>
                    <?php  
                    }else{
                    ?>
                        <form action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" id="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" id="pwd" placeholder="password">
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>