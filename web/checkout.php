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
		<form>
			<h3>Address</h3>
			<input type="text" name="addres" placeholder="enter address">
			<input type="submit" name="submit" value="place order">
		</form>
	</main>
</body>
</html>