<?php
    include 'db.inc.php';
    $sql = "INSERT INTO customer (CustomerID, Name, Email, CountryCode, Budget, Used) 
		VALUES ('".$_POST["txtCustomerID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."'
		,'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Record add successfully";
	}

	mysqli_close($conn);
?>
