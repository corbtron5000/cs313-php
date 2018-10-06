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
				echo "<img src='c2x2.jpg' height='200' width='200'>";
				echo "<div id='cube2>";
				echo "<h3> 2 x 2 Rubik's Cube </h3>";
				echo "<label> Quantity: $q2 </table?";
				echo "<label> price: $ $price2.00 </label>";
				echo "<br>";
				echo "<input type='submit' name='remove' value='remove one'>";
				echo "<button id='shopping2' value='continue shopping' onclick='https://cryptic-reaches-89767.herokuapp.com/prove3.php'> continue shopping </button>";
				echo "</div>";
				echo "</div>";

			}
		?>
	</form>
</main>

</body>
</html>