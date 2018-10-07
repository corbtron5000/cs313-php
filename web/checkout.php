<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="prove3.css">
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
			<h3>Address</h3>
			<input type="text" name="addres" placeholder="123 Main St.">
			<input type="text" name="zip" placeholder="11111">
			<input type="text" name="state" placeholder="CA">
			<input type="submit" name="submit" value="place order">
		</form>
	</main>
</body>
</html>