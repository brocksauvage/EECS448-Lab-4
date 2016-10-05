<link rel="stylesheet" href="style.css" type="text/css">

<?php
	$guitarNum = $_POST["guitar"];
	$guitarVal = 200;
	$mandNum = $_POST["mandolin"];
	$mandVal = 300;
	$banjoNum = $_POST["banjo"];
	$banjoVal = 400;
	$shipping = $_POST["shipping"];
	$shippingType = "";
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	if($shipping == 0)
	{
		$shippingType = "Free 7-day";
	}
	else if($shipping == 50)
	{
		$shippingType = "$50.00 over night";
	}
	else if($shipping == 5)
	{
		$shippingType = "$5.00 three day";
	}

	echo "Welcome, " . $user . ". Your password is: " . $pass ."<br><br>";
	echo "<table>";
	echo "<tr>";
	echo "<td></td>" . "<td>Quantity</td>" . "<td>Cost Per Item</td>" . "<td>Subtotal</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Guitar</td><td>" . $guitarNum . "</td><td>$" . $guitarVal . "</td><td>$" . $guitarVal*$guitarNum . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Mandolin</td><td>" . $mandNum . "</td><td>$" . $mandVal . "</td><td>$" . $mandVal*$mandNum . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Banjo</td><td>" . $banjoNum . "</td><td>$" . $banjoVal . "</td><td>$" . $banjoVal*$banjoNum . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Shipping</td><td>" . $shippingType . "</td><td>$" . $shipping . "</td>" . "<td>$" . $shipping . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>	Total Cost	</td><td>$" . (($guitarVal*$guitarNum)+($mandVal*$mandNum)+($banjoVal*$banjoNum)+$shipping) . "</td>";
	echo "</tr>";
	echo "</table>";
?>
