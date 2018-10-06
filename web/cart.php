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

	<form>
		<?php
			if ($_SESSION["cart"] == 0) {
				echo "<p> cart is empty </p>";
			}
			
			if ($_SESSION['count2'] > 0) {

				$q2 = $_SESSION['count2'];
				$price2 = $_SESSION['p2'] * $q2;
				echo "<div>";
				echo "<img src="c2x2.jpg" height="200" width="200">";
				echo "<label> Quanity: $q2 </table?";
				echo "<label> prices: $price2 </label>";
				echo "<input type="submit" name="Add2x2" value="Add to cart">";
				echo "</div>";

			}
		?>
	</form>
</main>

</body>
</html>