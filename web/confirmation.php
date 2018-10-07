<?php
	session_start();

	$street = $_POST['address'];
	$zip = $_POST['zip'];
	$state = $_POST['state'];

	$_SESSION['street'] = $street;
	$_SESSION['zips'] = $zip;
	$_SESSION['states'] = $state;
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="confirmation.css">
		<title>Confirmation</title>
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
	<br><br><br><br><br><br><br><br>
	</body>
</html>