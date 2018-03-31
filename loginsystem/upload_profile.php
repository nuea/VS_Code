<?php
    session_start();
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Profile</title>
</head>
<body>
    <form action="up_profile.php" enctype="multipart/form-data" method="post">
        <input type="file" name="img" id="img">
        <button type="submit" name="submit">Uploade</button>
    </form>
</body>
</html>