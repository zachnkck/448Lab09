<?php
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	$shipping = $_POST["shipping"];
	$amounts = array($_POST["amnt1"], $_POST["amnt2"], $_POST["amnt3"]);
	$costs = array(70.00, 10.00, 999.99);
	if($shipping == "Free") {
		$shippingcost = 0;
	}
	else if($shipping == "Overnight") {
		$shippingcost = 50;
	}
	else if($shipping == "3Day") {
		$shippingcost = 5;
	}
	echo '<link rel="stylesheet" href="style.css">';
	echo '<div class="thankYou">';
	echo "<h1>Thanks for your purchase, " . $username . "!</h1>";
	echo "<h2>Your password is: " . $pass . "</h2>";
	echo "</div>";
	echo "<br>";
	echo '<div class="receipt">';
	echo "<h2>Your Receipt:</h2>";
	echo "<table>";
	echo "<tr>";
	echo "<th></th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost Per Item</th>";
	echo "<th>Subtotal</th>";
	echo "</tr><tr>";
	echo "<th>Item 1</th>";
	echo "<td>" . $amounts[0] . "</td>";
	echo "<td>$" . $costs[0] . "</td>";
	echo "<td>$" . ($costs[0] * $amounts[0]) . "</td>";
	echo "</tr><tr>";
	echo "<th>Item 2</th>";
	echo "<td>" . $amounts[1] . "</td>";
	echo "<td>$" . $costs[1] . "</td>";
	echo "<td>$" . ($costs[1] * $amounts[1]) . "</td>";	
	echo "</tr><tr>";
	echo "<th>Item 3</th>";
	echo "<td>" . $amounts[2] . "</td>";
	echo "<td>$" . $costs[2] . "</td>";
	echo "<td>$" . ($costs[2] * $amounts[2]) . "</td>";
	echo "</tr><tr>";
	echo "<th>Shipping</td><th></td>";
	echo "<td>$" . $shippingcost . "</td>";
	echo "<td>$" . $shippingcost . "</td>";
	echo "</tr><tr>";
	echo "<th>Total Cost</th><td></td><td></td>";
	echo "<td>$" . (($costs[0] * $amounts[0]) + ($costs[1] * $amounts[1]) + ($costs[2] * $amounts[2]) + $shippingcost) . "</td></tr></table>";
	echo "</div>";

?>
	