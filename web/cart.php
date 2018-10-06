<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="prove3.css">
	<title>Shopping Cart</title>
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
<main>
	<h1 id="shopping">Shopping Cart</h1>

	<?php
		if ($_SESSION["cart"] == 0) {
			echo "<p> cart is empty </p>"
		}
		else {
			echo "<p> I am not empty </p>"
		}
	?>
</main>

</body>
</html>