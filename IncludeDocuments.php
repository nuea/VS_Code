<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-IncludeDocuments</title>
</head>
<body>
    <div class="menu">
        <?php include 'includeFunctions/menu.php';?>
    </div>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php 
        include 'includeFunctions/footer.php';
    ?>
</body>
</html>