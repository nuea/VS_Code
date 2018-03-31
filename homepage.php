<?php
    include "includeDB/db.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-Connect a Database</title>
</head>
<body><center>
    <form action="includeDB/sqlInsert.php" name="frmAdd" method="post">
        <table width="284" border="1">
        <tr>
            <th align="left" width="120">CustomerID</th>
            <td width="238"><input type="text" name="txtCustomerID" size="5"></td>
        </tr>
        <tr>
            <th align="left" width="120">Name</th>
            <td><input type="text" name="txtName" size="20"></td>
            </tr>
        <tr>
            <th align="left" width="120">Email</th>
            <td><input type="text" name="txtEmail" size="20"></td>
            </tr>
        <tr>
            <th align="left" width="120">CountryCode</th>
            <td><input type="text" name="txtCountryCode" size="2"></td>
            </tr>
        <tr>
            <th align="left" width="120">Budget</th>
            <td><input type="text" name="txtBudget" size="5"></td>
            </tr>
        <tr>
            <th align="left" width="120">Used</th>
            <td><input type="text" name="txtUsed" size="5"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <table border=1>
        <tr>
            <td>Index</td>
            <td>CustomerID</td>
            <td>Name</td>
            <td>Email</td>
            <td>CountryCode</td>
            <td>Budget</td>
            <td>Used</td>
        </tr>
    <?php
        $i=0;
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        while($rs = mysqli_fetch_assoc($result))
        {
            $i++;
    ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rs['CustomerID']; ?></td>
            <td><?php echo $rs['Name']; ?></td>
            <td><?php echo $rs['Email']; ?></td>
            <td><?php echo $rs['CountryCode']; ?></td>
            <td><?php echo $rs['Budget']; ?></td>
            <td><?php echo $rs['Used']; ?></td>
        </tr>
    <?php  
        }
    ?>
    </table>
</body>
</html>