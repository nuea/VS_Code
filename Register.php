<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleRegi.css">
    <title>Register</title>
</head>
<body>
    <div id="login-box">
    <div class="left">
        <h1>Sign up</h1>
        <form action="includeDB/insertRegi.php" name="frmAdd" method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="password2" placeholder="Retype password" /> 
            <span class="msg">
                <?php 
                    if(isset($_GET['msg']))
                        echo $_GET['msg'];
                ?>
            </span>
            <input type="submit" name="signup_submit" value="Sign up" />
        </form>
    </div>
    
    <div class="right">
        <span class="loginwith">Sign in with<br />social network</span>
        <button class="social-signin facebook">Log in with facebook</button>
        <button class="social-signin twitter">Log in with Twitter</button>
        <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
    </div>
    <?php
        /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(stpos($fullUrl,"sin"))*/
    ?>
</body>
</html>