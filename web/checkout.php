<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<title>Checkout</title>
</head>
<body>
		<header>
		<h1 id="title">Puzzle Mania</h1>
		<ul>
			<li><a href="prove3.php">Home</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="checkout.php">Checkout</a></li>
			<li><a href="assignments.html">Assignments</a></li>
		</ul>
	</header>

	<main>
		<br><br><br><br><br><br><br><br>
		<h1>Checkout</h1>
		<form method="POST", action="confirmation.php">
			<label>Address</label><input type="text" name="address" placeholder="123 Main St."><br>
			<label>Zip Code</label><input type="text" name="zip" placeholder="11111"><br>
			<label>State</label><input type="text" name="state" placeholder="CA"><br>
			<input type="submit" name="submit" value="place order">
			<a href="cart.php">Return to cart</a>
		</form>
	</main>
</body>
</html>